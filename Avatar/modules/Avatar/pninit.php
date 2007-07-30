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
 * Avatar_init()
 * 
 * Initialize the Module
 * 
 * @return boolean success or not
 */
function Avatar_init()
{
    pnModSetVar('Avatar', 'avatardir',          'images/avatar');
    pnModSetVar('Avatar', 'forumdir',           '');
    pnModSetVar('Avatar', 'allow_resize',       false);
    pnModSetVar('Avatar', 'maxsize',            '12000');
    pnModSetVar('Avatar', 'maxheight',          '80');
    pnModSetVar('Avatar', 'maxwidth',           '80');
    pnModSetVar('Avatar', 'allowed_extensions', 'gif;jpg;png');
    return true;
} 

/**
 * Avatar_upgrade()
 * 
 * Upgrade the Module
 * 
 * @param integer $oldversion old version of the module
 * @return boolean success or not
 **/
function Avatar_upgrade($oldversion)
{
    // Upgrade dependent on old version number
    switch($oldversion) {
        case '1.1': 
            pnModDelVar('Avatar', 'prefix_group_1');
            pnModDelVar('Avatar', 'prefix_group_2');
            pnModDelVar('Avatar', 'prefix_group_3');
            pnModDelVar('Avatar', 'prefix_prefix_1');
            pnModDelVar('Avatar', 'prefix_prefix_2');
            pnModDelVar('Avatar', 'prefix_prefix_3');

    }
    return true;
} 

/**
 * Avatar_delete()
 * 
 * Delete the module
 * 
 * @return boolean success or not
 */
function Avatar_delete()
{
    pnModDelVar('Avatar');
    return true;
} 
