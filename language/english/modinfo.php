<?php

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 * Module: countdown
 *
 * @category        Module
 * @package         countdown
 * @author          XOOPS Development Team <name@site.com> - <https://xoops.org>
 * @copyright       {@link https://xoops.org/ XOOPS Project}
 * @license         GPL 2.0 or later
 * @link            https://xoops.org/
 * @since           1.0.0
 */
// Admin
define('MI_COUNTDOWN_NAME', 'Countdown');
define('MI_COUNTDOWN_DESC', 'This module is for doing following...');
//Menu
define('MI_COUNTDOWN_ADMENU1', 'Home');
define('MI_COUNTDOWN_ADMENU2', 'Events');
define('MI_COUNTDOWN_ADMENU3', 'Permissions');
define('MI_COUNTDOWN_ADMENU4', 'About');
//Blocks
//Config
define('MI_COUNTDOWN_EDITOR_ADMIN', 'Editor: Admin');
define('MI_COUNTDOWN_EDITOR_ADMIN_DESC', 'Select the Editor to use by the Admin');
define('MI_COUNTDOWN_EDITOR_USER', 'Editor: User');
define('MI_COUNTDOWN_EDITOR_USER_DESC', 'Select the Editor to use by the User');
define('MI_COUNTDOWN_KEYWORDS', 'Keywords');
define('MI_COUNTDOWN_KEYWORDS_DESC', 'Insert here the keywords (separate by comma)');
define('MI_COUNTDOWN_ADMINPAGER', 'Admin: records / page');
define('MI_COUNTDOWN_ADMINPAGER_DESC', 'Admin: # of records shown per page');
define('MI_COUNTDOWN_USERPAGER', 'User: records / page');
define('MI_COUNTDOWN_USERPAGER_DESC', 'User: # of records shown per page');
define('MI_COUNTDOWN_MAXSIZE', 'Max size');
define('MI_COUNTDOWN_MAXSIZE_DESC', 'Set a number of max size uploads file in byte');
define('MI_COUNTDOWN_MIMETYPES', 'Mime Types');
define('MI_COUNTDOWN_MIMETYPES_DESC', 'Set the mime types selected');
define('MI_COUNTDOWN_IDPAYPAL', 'Paypal ID');
define('MI_COUNTDOWN_IDPAYPAL_DESC', 'Insert here your PayPal ID for donactions.');
define('MI_COUNTDOWN_ADVERTISE', 'Advertisement Code');
define('MI_COUNTDOWN_ADVERTISE_DESC', 'Insert here the advertisement code');
define('MI_COUNTDOWN_BOOKMARKS', 'Social Bookmarks');
define('MI_COUNTDOWN_BOOKMARKS_DESC', 'Show Social Bookmarks in the form');
define('MI_COUNTDOWN_FBCOMMENTS', 'Facebook comments');
define('MI_COUNTDOWN_FBCOMMENTS_DESC', 'Allow Facebook comments in the form');
// Notifications
define('MI_COUNTDOWN_GLOBAL_NOTIFY', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_CATEGORY_NOTIFY', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_CATEGORY_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_FILE_NOTIFY', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_FILE_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_NEWCATEGORY_NOTIFY', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_NEWCATEGORY_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_NEWCATEGORY_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_NEWCATEGORY_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_FILEMODIFY_NOTIFY', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_FILEMODIFY_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_FILEMODIFY_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_FILEMODIFY_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_FILEBROKEN_NOTIFY', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_FILEBROKEN_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_FILEBROKEN_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_FILEBROKEN_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_FILESUBMIT_NOTIFY', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_FILESUBMIT_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_FILESUBMIT_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_FILESUBMIT_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_NEWFILE_NOTIFY', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_NEWFILE_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_NEWFILE_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_GLOBAL_NEWFILE_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_CATEGORY_FILESUBMIT_NOTIFY', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_CATEGORY_FILESUBMIT_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_CATEGORY_FILESUBMIT_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_CATEGORY_FILESUBMIT_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_CATEGORY_NEWFILE_NOTIFY', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_CATEGORY_NEWFILE_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_CATEGORY_NEWFILE_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_CATEGORY_NEWFILE_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_FILE_APPROVE_NOTIFY', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_FILE_APPROVE_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_FILE_APPROVE_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_COUNTDOWN_FILE_APPROVE_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');

// Help
define('MI_COUNTDOWN_DIRNAME', basename(dirname(dirname(__DIR__))));
define('MI_COUNTDOWN_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
define('MI_COUNTDOWN_BACK_2_ADMIN', 'Back to Administration of ');
define('MI_COUNTDOWN_OVERVIEW', 'Overview');
// The name of this module
//define('MI_COUNTDOWN_NAME', 'YYYYY Module Name');

//define('MI_COUNTDOWN_HELP_DIR', __DIR__);

//help multi-page
define('MI_COUNTDOWN_DISCLAIMER', 'Disclaimer');
define('MI_COUNTDOWN_LICENSE', 'License');
define('MI_COUNTDOWN_SUPPORT', 'Support');
//define('MI_COUNTDOWN_REQUIREMENTS', 'Requirements');
//define('MI_COUNTDOWN_CREDITS', 'Credits');
//define('MI_COUNTDOWN_HOWTO', 'How To');
//define('MI_COUNTDOWN_UPDATE', 'Update');
//define('MI_COUNTDOWN_INSTALL', 'Install');
//define('MI_COUNTDOWN_HISTORY', 'History');
//define('MI_COUNTDOWN_HELP1', 'YYYYY');
//define('MI_COUNTDOWN_HELP2', 'YYYYY');
//define('MI_COUNTDOWN_HELP3', 'YYYYY');
//define('MI_COUNTDOWN_HELP4', 'YYYYY');
//define('MI_COUNTDOWN_HELP5', 'YYYYY');
//define('MI_COUNTDOWN_HELP6', 'YYYYY');

// Permissions Groups
define('MI_COUNTDOWN_GROUPS', 'Groups access');
define('MI_COUNTDOWN_GROUPS_DESC', 'Select general access permission for groups.');
define('MI_COUNTDOWN_ADMINGROUPS', 'Admin Group Permissions');
define('MI_COUNTDOWN_ADMINGROUPS_DESC', 'Which groups have access to tools and permissions page');
