<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

/****************************************************************************************************/
$url_details=$_SERVER['HTTP_HOST'];
$url_details.=str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);/*For Getting the project(Hosting Name)*/

$final_url='http://'.$url_details;
/*--------------------------------------------------------------------------
 *  Project Realted Constants defining here
 ----------------------------------------------------------------------------*/
define('FAVICON_PATH','');
/*
|--------------------------------------------------------------------------
| RESPONSE Codes(for Developer Purpose)
|--------------------------------------------------------------------------
 */
define('DATE',date('Y-m-d H:i:s'));
define('QUERY_DEBUG',1);
define('QUERY_MESSAGE','query_show');
define('QUERY_DEBUG_MESSAGE','query_debug');
define('CODE','code');
define('MESSAGE','message');
define('DESCRIPTION','description');
define('EMAIL_EXISTS','emailexists');
define('MOBILE_EXISTS','mobileexists');
define('INSERTED_ID','inserted_id');
define('DB_ERROR','dberror');
define('SUCCESS_CODE',200);
define('FAIL_CODE',204);
define('VALIDATION_CODE',301);
define('EXISTS_CODE',422);
define('INTERNAL_SERVER_ERROR_CODE',500);
define('DB_ERROR_CODE',575);

define('SITE_TITLE','Ghar Adhaar');
define('SITE_DOMAIN','gharadhaar.com');


define('APP_EXT','api/');
/*
|--------------------------------------------------------------------------
| Super admin Module Code 
|--------------------------------------------------------------------------
 */

define('MASTER_ASSETS',$final_url.'master_assets/');
define('MASTER_CSS_PATH',MASTER_ASSETS.'css/');
define('MASTER_JS_PATH',MASTER_ASSETS.'js/');
define('MASTER_IMAGES_PATH',MASTER_ASSETS.'images/');
define('EMPLOYEE_UPLOADS_PATH',$final_url.'uploads/employee_image/');
define('MASTER_PATH',$final_url.'master/');

define('MASTER_HEADER_PATH','includes/master_header');
define('MASTER_FOOTER_PATH','includes/master_footer');
define('MASTER_SIDEBAR_PATH','includes/master_sidebar');
define('MASTER_CSS_INCLUDE_PATH','includes/master_css');
define('MASTER_JS_INCLUDE_PATH','includes/master_js');
define('MASTER_LOGO',MASTER_IMAGES_PATH.'logo.png');
define('COMMON_JS_FILE',MASTER_JS_PATH.'common.js');
/*
|--------------------------------------------------------------------------
| Super admin Module Code   END
|--------------------------------------------------------------------------
 */
/* SUper admin session codes start */
define('MASTER_SESS_CODE','RL_GA_');


/* my custom defines starts from hear */ 


define('CSS_PATH',$final_url.'assets/css/'); //custom css 
define('JS_PATH',$final_url.'assets/js/'); //custom Js 
define('IMG_PATH',$final_url.'assets/images/'); //custom Js 
define('SUPER_CSS_PATH',$final_url.'superadmin_assets/css/'); //custom css 
define('SUPER_JS_PATH',$final_url.'superadmin_assets/js/'); //custom Js 
define('SUPER_IMG_PATH',$final_url.'superadmin_assets/images/'); //custom Js 
define('SUPER_ADMIN_FOLDER_PATH',$final_url.'superadmin/');

define('SUPER_HEADER_PATH','superadmin/includes/header.php');
define('SUPER_SIDEBAR_PATH','superadmin/includes/sidebar.php');
define('SUPER_FOOTER_PATH','superadmin/includes/footer.php');
define('SUPER_COMMON_CSS_PATH','superadmin/includes/common_css.php');
define('SUPER_COMMON_JS_PATH','superadmin/includes/common_js.php');
define('SUPER_ADMIN_LINK',$final_url.'superadmin/');
define('SUPER_ADMIN_CTRL',$final_url.'superadmin/');
//Frontend 
define('MYCSS_PATH',$final_url.'assets/css/');
define('TITLE_PATH','Itsmytutor');
define('MYJS_PATH',$final_url.'assets/js/');
define('MYIMAGES_PATH',$final_url.'assets/images/');
define('ALL_IMAGE_PATH',$final_url.'uploads/books/books_images/');
define('BOOK_FOLDER',$final_url.'uploads/books/');
define('MYFONTS_PATH',$final_url.'assets/');
define('SUPER_ADMIN_PATH',$final_url.'admin/');
//define('SITE_DOMAIN','mytutor.com');
define('SITE_MODE',0);/*1 : LIVE & 0 : LOCALHOST*/
define('SMTP_FROM_EMAIL',(SITE_MODE==1)?'info@mytutor.com':'achariphp@gmail.com');
define('SMTP_FROM_NAME',SITE_DOMAIN);
define('BCC_EMAIL','jitendra.richlabz@gmail.com');
define('SMTP_PORT',(SITE_MODE==1)?25:465);
define('SMTP_USER',(SITE_MODE==1)?'achari@realrichies.com':'knsr1987@gmail.com');
define('SMTP_PASSWORD',(SITE_MODE==1)?'mahalacto':'reddy*123');
define('SMTP_HOST',(SITE_MODE==1)?'mail.realrichies.com':'ssl://smtp.gmail.com');
define('SMTP_PROTOCAL',(SITE_MODE==1)?'mail':'smtp');
define('logo_theme','blue');
define('SITE_NAME','mytutor');
define('EMAIL_TEMPLATE_FOLDER','emailtemplate/');
define('PERPAGE',20);
define('BOOK','rentabook/');