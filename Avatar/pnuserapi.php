<?php
/**
 * Avatar Module
 *
 * The Avatar module allows uploading of individual Avatars.
 * It is based on EnvoAvatar from A.T.Web, http://www.atw.it
 *
 * @package      Avatar
 * @version      $Id$
 * @author       Joerg Napp, Frank Schummertz
 * @link         http://lottasophie.sf.net, http://www.pn-cms.de
 * @copyright    Copyright (C) 2004-2007
 * @license      http://www.gnu.org/copyleft/gpl.html GNU General Public License
 */

/**
 * Avatar_userapi_GetAvatars()
 *
 * returns all possible avatars for the current user.
 *
 * @param integer $args['uid'] the user ID (if missing, the current user is assumed)
 * @param integer $args['startnum'] int the number where to start (for paging)
 * @param integer $args['perpage'] int items per page
 * @return array a list of avatar file names
 **/
function Avatar_userapi_getAvatars($args)
{
    $uid      = (isset($args['uid'])) ? $args['uid'] : pnUserGetVar('uid');
    $page     = (isset($args['page'])) ? $args['page']: -1;
    $perpage  = (isset($args['perpage'])) ? $args['perpage'] : -1;
    $avatarpath = pnModGetVar('Users', 'avatarpath');

    Loader::loadClass('FileUtil');
    $allavatars = FileUtil::getFiles($avatarpath, true, true, null, false);
    $allavatars = array_diff($allavatars, array('blank.gif', 'gravatar.gif'));
    $avatars = array();
    foreach ($allavatars as $avatar) {
        // imagename is like pers_XXXX.gif (with XXXX = user id)
        if (pnModAPIFunc('Avatar', 'user', 'checkAvatar', array('avatar' => $avatar, 'uid' => $uid)) == true) {
            $avatars[] = $avatar;
        }
    }
    sort($avatars);
    $allcount = count($avatars);
    // paging
    if ($page <> -1 && $perpage <> -1) {
        $start = ($page-1) * $perpage;
        $stop = $start + $perpage;
        if($stop > $allcount) {
            $stop = $allcount;
        }
        for ($idx = $start; $idx < $stop; $idx++) {
            $pagedavatars[] = $avatars[$idx];
        }
        return array($pagedavatars, $allcount);
    }

    return array($avatars, $allcount);
}


/**
 * Avatar_userapi_setavatar()
 *
 * sets the user avatar.
 *
 * @param integer $args['uid'] the user id
 * @param string $args['avatar'] the user avatar
 * @return boolean success
 **/
function Avatar_userapi_setavatar($args)
{
    $dom = ZLanguage::getModuleDomain('Avatar');

    if (!isset($args['uid']) || !isset($args['avatar'])) {
        return LogUtil::registerArgsError();
    }

    $avatar_ok = pnModAPIFunc('Avatar', 'user', 'checkAvatar', $args);

    if($avatar_ok == true) {
        $uname = pnUserGetVar('uname', $args['uid']);
        if ($args['avatar'] == 'blank.gif') {
            $args['avatar'] = '';
            $status = __f('Done! The avatar of user \'%s\' has been disabled.', $uname, $dom);
        } else if ($args['avatar'] == 'gravatar.gif') {
            $status = __f('Done! The avatar of user \'%s\' has been set to his global recognized avatar.', $uname, $dom);
        } else {
            $status = __f('Done! The avatar of user \'%1$s\' has been changed to \'%2$s\'', array($uname, $args['avatar']), $dom);
        }
        pnUserSetVar('user_avatar', $args['avatar'], $args['uid']);
        LogUtil::registerStatus($status);
        return true;
    }

    return LogUtil::registerError(__f('Error! The user is not authorized to use this avatar. To change this, update the permission for %s.', $args['avatar'], $dom));
}

/**
 * check if a user is allowed to use a avatar
 *
 *@params string   $args['avatar'] the avatar filename
 *@params int      $args['uid']    the userid of the current user
 *
 */
function Avatar_userapi_checkAvatar($args)
{
    // check if the avatar is allowed for the user
    $avatar_ok = false;
    $parts = explode('_', $args['avatar']);
    if(is_array($parts)) {
        // with pers_XXX.gif, [0] is now pers, [1] is now XXXX.gif
        if(!isset($parts[1])) {
            // normal avatar, so it's OK
            $avatar_ok = true;
        } else {
            $userparts = explode('.', $parts[1]);
            // [0] is now the user id, [1] is the file extension
            // check for permission
            $avatar_ok = (SecurityUtil::checkPermission('Avatar::', $parts[0] . ':' . $userparts[0] . ':', ACCESS_READ) || $userparts[0] == $args['uid']);
        }
    }
    return $avatar_ok;
}
