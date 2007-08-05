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

define('_AVATAR_ADM_ALLOWMULTIPLEAVATARS',    'Allow multiple avatars');
define('_AVATAR_ADM_MULTIPLE_HINT',           'This allows the user to store one avatar per extension that are allowed.');
define('_AVATAR_LISTUSERS',                   'User auflisten, die diesen Avatar benutzen');
define('_AVATAR_DELETEAVATAR',                'Avatar l�schen');
define('_AVATAR_AVATARINUSE',                 'Achtung: Dieser Avatar ist in Benutzung und kann nicht gel�scht werden. Vor der L�schung m�ssen den unten aufgef�hrten Benutzern neue Avatare zugeteilt werden.');
define('_AVATAR_CONFIRMDELETE',               'L�schung best�tigen');
define('_AVATAR_ERRORDELETINGAVATAR',         'Fehler: Der Avatar %avatar% konnte nicht gel�scht werden');
define('_AVATAR_DELETED',                     'Der Avatar %avatar% wurde gel�scht');
define('_AVATAR_SELECTAVATARFORUSERS',        'Gew�hlte User mit folgenden Avatar versehen');
define('_AVATAR_NOUSERFORTHISAVATAR',         'Kein Benutzer verwendet diesen Avatar');
define('_AVATAR_USERLISTPERAVATAR',           'Benutzer die diesen Avatar verwenden');
define('_AVATAR_CHANGEDTO',                   'Der Avatar des Benutzer %username% wurde ge�ndert auf %avatar%');
define('_AVATAR_ERR_USERNOTAUTHORIZED',       'Der User darf diesen Avatar nicht sehen. Zum �ndern bitte die Zugriffsrechte f�r %s anpassen');
define('_AVATAR_DELETECURRENTAVATAR',         'Aktuellen Avatar l�schen?');
define('_AVATAR_SELECTNEWAVATAR',             'Neuen Avatar ausw�hlen');
define('_AVATAR_CURRENTAVATAR',               'Aktueller Avatar');
define('_AVATAR_ENTERUSERNAME',               'Benutzername');
define('_AVATAR_MODIFYCONFIG',                'Konfiguration �ndern');
define('_AVATAR_MAINTAINAVATARS',             'Avatars verwalten');
define('_AVATAR_VISITHOMEPAGE',               'Avatar-Modul im NOC besuchen');
define('_AVATAR_ADM_TITLE',                   'Avatarverwaltung');

// upload settings form
define('_AVATAR_ADM_UPLOAD',                  'Einstellungen zum Upload');
define('_AVATAR_ADM_AVATARDIR',               'Avatar Verzeichnis (PostNuke)');
define('_AVATAR_ADM_AVATARDIR_HINT',          'Standard: images/avatar <strong>ohne / am Ende des Pfades!</strong>');
define('_AVATAR_ADM_FORUMDIR',                'Avatar Verzeichnis (PHPBB2-Forum)');
define('_AVATAR_ADM_ALLOWRESIZE',             'Automatische verkleinerung des Avatarbildes');
define('_AVATAR_ADM_MAXSIZE',                 'Dateigr��e in Bytes');
define('_AVATAR_ADM_MAXHEIGHT',               'Maximal H�he in Pixel');
define('_AVATAR_ADM_MAXWIDTH',                'Maximale Breite in Pixel');
define('_AVATAR_ADM_EXTENSIONS',              'Erlaubte Dateiendungen');
define('_AVATAR_ADM_EXTENSIONS_HINT',         'Eine durch Semikolons getrennte Liste erlaubter Dateiendungen');

// warnings
define('_AVATAR_WARN_AVARTARDIR',             'Achtung: das Avatar-Verzeichnis ist nicht beschreibbar');
define('_AVATAR_WARN_FORUMDIR',               'Achtung: das Forum-Verzeichnis ist nicht beschreibbar (Das ist OK, wenn kein PNphpBB2 installiert ist)');

// title
define('_AVATAR_TITLE',              'Avatar-Bild Einstellungen');

// defines for the avatar select form
define('_AVATAR_SELECTYOURAVATAR',   'Bitte w�hle durch Anklicken ein Avatar-Bild aus den folgenden aus');
define('_AVATAR_SELECTAVATAR',       'Avatar ausw�hlen');
define('_AVATAR_CURRENTAVATAR',      'Der aktuelle Avatar ist ');

// defines for the upload form
define('_AVATAR_USER_CHOOSE',        'Wenn ein eigenes Avatar bereits vorhanden ist, muss kein weiteres hochgeladen werden.');
define('_AVATAR_UPLOADFILE',         'Datei hochladen');
define('_AVATAR_UPLOAD_BUTTON',      'Hochladen');
define('_AVATAR_CLEAR_BUTTON',       'Eingabe l�schen');
define('_AVATAR_MAXSIZE',            'Maximal Dateigr��e des Avatars');
define('_AVATAR_ALLOWEDEXTENSIONS',  'Erlaubte Dateiendungen');
define('_AVATAR_MAXHEIGHT',          'Maximale H�he in Pixel');
define('_AVATAR_MAXWIDTH',           'Maximale Breite in Pixel');
define('_AVATAR_MAXDIMENSIONS',      'Maximale Avatargr��e');
define('_AVATAR_PIXEL',              'Pixel');
define('_AVATAR_RESIZE',             'Gr��ere Bilder werden automatisch verkleinert.');

// Error Messages
define('_AVATAR_ERR_FILETYPE',       'Dieser Dateityp ist nicht gestattet.');
define('_AVATAR_ERR_FILESIZE',       'Die Dateigr��e ist nicht gestattet.');
define('_AVATAR_ERR_FILEDIMENSIONS', 'Die Abmessungen des Bildes sind zu gro�.');
define('_AVATAR_ERR_FILEUPLOAD',     'Keine Datei ausgew�hlt.');
define('_AVATAR_ERR_AUTHORIZED',     'Keine Berechtigung, einen Avatar auszuw�hlen.');
define('_AVATAR_ERR_COPYAVATAR',     'Das Hochladen der Datei ist fehlgeschlagen.');
define('_AVATAR_ERR_COPYFORUM',      'Das Hochladen der Datei ist fehlgeschlagen.');
define('_AVATAR_ERR_SELECT',         'Die Auswahl des Avatars schlug fehl.');
define('_AVATAR_ERR_NOTLOGGEDIN',    'Nicht registrierter User !');

// defines for the user page plugin
define('_AVATAR_SELECTAVATAR_LINK',  'Individuellen Avatar ausw�hlen');
