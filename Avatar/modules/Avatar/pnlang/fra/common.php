<?php
/**
 * Avatar Module
 * 
 * The Avatar module allows uploading of individual Avatars.
 * It is based on EnvoAvatar from A.T.Web, http://www.atw.it
 *
 * @package      Avatar
 * @version      $Id: common.php 81 2008-06-05 21:44:37Z Landseer $
 * @author       Joerg Napp, Frank Schummertz
 * @link         http://lottasophie.sf.net, http://www.pn-cms.de
 * @copyright    Copyright (C) 2004-2007
 * @license      http://www.gnu.org/copyleft/gpl.html GNU General Public License
 */
//Translated by: Alana, Christophe Beaujean aka Yokav, starguezer

// new
define('_AVATAR_SELECTDISPLAY', 'S�lectionnez le nombre d\'avatars � afficher par page');
//
// A
//
define('_AVATAR_ADM_ALLOWMULTIPLEAVATARS',    'Autoriser plusieurs avatars');
define('_AVATAR_ADM_ALLOWRESIZE',             'Redimensionner l\'avatar automatiquement');
define('_AVATAR_ADM_AVATARDIR',               'R�pertoire des avatars (Zikula)');
define('_AVATAR_ADM_AVATARDIR_HINT',          'Par d�faut: images/avatar <strong>sans le dernier /</strong>');
define('_AVATAR_ADM_EXTENSIONS',              'Extensions autoris�es :');
define('_AVATAR_ADM_EXTENSIONS_HINT',         '(un point virgule s�pare les extensions autoris�es, les formats support�s sont gif, jpg, jpeg, png, wbm. Lorsque vous utilisez la version 5 de PHP ou une version sup�rieur, vous devez autoriser \'jpeg\' � la place de \'jpg\')');
define('_AVATAR_ADM_FORUMDIR',                'R�pertoire des avatars (PHPBB2');
define('_AVATAR_ADM_MAXHEIGHT',               'Hauteur maximale en pixel');
define('_AVATAR_ADM_MAXSIZE',                 'Taille maximale du fichier en octet');
define('_AVATAR_ADM_MAXWIDTH',                'Largeur maximale en pixel');
define('_AVATAR_ADM_MULTIPLE_HINT',           'Ceci permet aux membres de sauvegarder un avatar pour chaque extension');
define('_AVATAR_ADM_TITLE',                   'Administration des avatars');
define('_AVATAR_ADM_UPLOAD',                  'Configuration');
define('_AVATAR_ALLOWEDEXTENSIONS',  'Les extensions possibles');
define('_AVATAR_AVATARINUSE',                 'Attention: Cet avatar est en cours d\'utilisation et ne peut pas �tre supprim�. Si vous voulez le supprimer, veuillez changer les avatars des membres qui sont dans la liste ci-dessous.');

//
// B
//
define('_AVATAR_BYTES',                       'Bytes');

//
// C
//
define('_AVATAR_CHANGEDTO',                   'L\'avatar du membre %username% est chang� en %avatar%');
define('_AVATAR_CLEAR_BUTTON',       'Enlever');
define('_AVATAR_CONFIRMDELETE',               'Confirmer la suppression');
define('_AVATAR_CURRENTAVATAR',      'Votre avatar actuel est');

//
// D
//
define('_AVATAR_DELETEAVATAR',                'supprimer l\'avatar');
define('_AVATAR_DELETECURRENTAVATAR',         'Voulez-vous supprimez l\'avatar actuel?');
define('_AVATAR_DELETED',                     'Avatar %avatar% est supprim�');

//
// E
//
define('_AVATAR_ENTERUSERNAME',               'Indiquez un nom d\'utilisateur');
define('_AVATAR_ERRORDELETINGAVATAR',         'Erreur: Impossible de supprimer l\'avatar %avatar%');
define('_AVATAR_ERR_AUTHORIZED',     'Vous n\'�tes pas autoris� � charger votre avatar.'); 
define('_AVATAR_ERR_COPYAVATAR',     'Echec de copie du fichier dans le dossier \'avatars\'.');
define('_AVATAR_ERR_COPYFORUM',      'Echec de copie du fichier dans le dossier \'phpbb\'.');
define('_AVATAR_ERR_FILEDIMENSIONS', 'Erreur avec la largeur (max. %h%px) ou la longeur (max. %w%px) de l\'image.');
define('_AVATAR_ERR_FILESIZE',       'Erreur de taille du fichier, un maximum de %max% octets est autoris�.');
define('_AVATAR_ERR_FILETYPE',       'Extension non autoris�e. Les extensions autoris�es sont: %ft%.');
define('_AVATAR_ERR_FILEUPLOAD',     'Aucun fichier n\'est s�lectionn�.');
define('_AVATAR_ERR_NOIMAGE',        'Ce fichier n\'est pas une image');
define('_AVATAR_ERR_NOTLOGGEDIN',    'Vous n\'�tes pas un utilisateur enregistr�.');
define('_AVATAR_ERR_SELECT',         'Erreur lors de la s�lection de cet avatar.');
define('_AVATAR_ERR_USERNOTAUTHORIZED',       'Le membre n\'a pas la permission d\'utiliser cet avatar. Il faut donc changer les droits de %avatar%.');

//
// L
//
define('_AVATAR_LISTUSERS',                   'lister les membres utilisant cet avatar');

//
// M
//
define('_AVATAR_MAINTAINAVATARS',             'G�rer les avatars');
define('_AVATAR_MAXDIMENSIONS',      'Les dimensions maximales de l\'avatar');
define('_AVATAR_MAXHEIGHT',          'Hauteur maximale');
define('_AVATAR_MAXSIZE',            'Taille max. du fichier de l\'avatar');
define('_AVATAR_MAXWIDTH',           'Largeur maximale');
define('_AVATAR_MISSINGPATH',                 'r�pertoire manquant');
define('_AVATAR_MODIFYCONFIG',                'Modifier la configuration');

//
// N
//
define('_AVATAR_NOUSERFORTHISAVATAR',         'Aucun membre n\'utilise cet avatar en ce moment');
define('_AVATAR_NOAVATARSELECTED',            'aucun avatar s�lectionn�');

//
// P
//
define('_AVATAR_PATHDOESNOTEXIST',   'Le r�pertoire %path% ne semble pas exister ou ne dispose pas d\'un droit de lecture par le serveur web.');
define('_AVATAR_PATHISNOTWRITABLE',  'Le serveur web ne peut enregistrer dans le r�pertoire %path%.');
define('_AVATAR_PIXEL',              'pixels');

//
// R
//
define('_AVATAR_RESIZE',             'Les images trop grandes seront redimensionn�es.');

//
// S
//
define('_AVATAR_SEARCHUSERS',         'Rechercher un membre');
define('_AVATAR_SELECTAVATAR',       'Choisir un avatar');
define('_AVATAR_SELECTAVATARFORUSERS',        'Choisir l\'avatar qui sera applicable � tous les membres s�lectionn�s');
define('_AVATAR_SELECTAVATAR_LINK',  'Changer l\'avatar');
define('_AVATAR_SELECTEDAVATAR',       'Avatar choisi');
define('_AVATAR_SELECTNEWAVATAR',             'Choisir un nouveau avatar');
define('_AVATAR_SELECTYOURAVATAR',   'Choisir votre avatar');

//
// T
//
define('_AVATAR_TITLE',              'Avatar');

//
// U
//
define('_AVATAR_UPLOADFILE',         'Charger un fichier');
define('_AVATAR_UPLOAD_BUTTON',      'Charger');
define('_AVATAR_USERLISTPERAVATAR',           'Les membres utilisant cet avatar');
define('_AVATAR_USER_CHOOSE',        'Si aucun avatar n\'est disponible pour vous repr�senter, vous pouvez toujours charger un avatar personnalis�.');

//
// V
//
define('_AVATAR_VISITHOMEPAGE',               'Visiter le projet Avatar');

//
// w
//
define('_AVATAR_WARN_AVARTARDIR',                    'Attention: le serveur web ne peut �crire dans le r�pertoire des avatars');
define('_AVATAR_WARN_FORUMDIR',                      'Attention: le serveur web ne peut �crire dans le r�pertoire des avatars du forum (ce qui est normal lorsque PNphpBB2 n\'est pas install�)');
