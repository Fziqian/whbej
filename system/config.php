<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author shzhrui<anhuike@gmail.com>
 * $Id: config.php 3304 2014-02-14 11:01:43Z youyi $
 */

define('__DEBUG', false);
define('__TIME',    time());
define('__CHARSET', 'UTF-8');
define('__CFG_DIR', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('__IMG_DIR', dirname(__CFG_DIR).DIRECTORY_SEPARATOR.'attachs'.DIRECTORY_SEPARATOR);
define('__TPL_DIR', dirname(__CFG_DIR).DIRECTORY_SEPARATOR.'themes'.DIRECTORY_SEPARATOR);
define('MAGIC_QUOTES_GPC', get_magic_quotes_gpc());

ini_set("display_errors", __DEBUG);
error_reporting(E_ALL ^ E_NOTICE ^ E_STRICT ^ E_WARNING);

date_default_timezone_set('Asia/Shanghai');
//date_default_timezone_set('PRC');
header("Content-type: text/html; charset=UTF-8");
class __CFG
{
    CONST DEBUG     = __DEBUG;
    CONST CHARSET   = __CHARSET;
    CONST DIR       = __CORE_DIR;
    CONST GPC       = MAGIC_QUOTES_GPC;
    CONST TIME      = __TIME;
    CONST TMPL_DIR  = __TPL_DIR;

    CONST RES_URL = 'http://www.whbej.com/static';

    CONST MYSQL = 'mysql://buerjia:hnq7hg53@buerjia.gotoftp11.com:3306/buerjia/jh_/UTF8';

    CONST SECRET_KEY = 'a34eff0213010bfb0dd07c0ea1b21a28';
    CONST Authorize = '077b98373eb0d53eafa4fa50953335f6';

    //Cookie
    CONST C_PREFIX  = 'KT-';
    CONST C_DOMAIN  = '';
    CONST C_PATH    = '/';
    CONST C_EXPIRE  = 2592000;
    CONST C_SECURE  = false; //https
    CONST C_HTTPONLY= true;  //httponly

    //session
    CONST S_TYPE    = 'database';
    CONST S_STAGE   = '';
    CONST S_NAME    = 'KTSSID';
    CONST S_EXPIRE  = 3600; 

    //cache
    CONST CACHE_TYPE = 'file'; 
    CONST CACHE_FILE_SIZE = '32M'; //开辟缓存文件大小
}