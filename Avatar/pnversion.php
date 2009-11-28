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

$dom = ZLanguage::getModuleDomain('Avatar');
$modversion['name']           = 'Avatar';
$modversion['displayname']    = __('Avatar', $dom);
//! module url shoudl be different to displayname
$modversion['url']            = __('avatar', $dom);
$modversion['version']        = '2.3';
$modversion['description']    = __('Upload of individual Avatars', $dom);
$modversion['credits']        = 'pndocs/changelog.txt';
$modversion['help']           = 'pndocs/readme.txt';
$modversion['changelog']      = 'pndocs/changelog.txt';
$modversion['license']        = 'pndocs/license.txt';
$modversion['official']       = 0;
$modversion['author']         = 'Joerg Napp, Frank Schummertz, Carsten Volmer';
$modversion['contact']        = 'http://code.zikula.org/avatar/';
$modversion['admin']          = 1;
$modversion['user']           = 1;
$modversion['securityschema'] = array('Avatar::' => '::',
                                      'Avatar::' => 'prefix:userid:');