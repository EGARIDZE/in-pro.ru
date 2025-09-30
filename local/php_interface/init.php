<?php
global $lang;

function session_register(){
    $args = func_get_args();
    foreach ($args as $key){
        if (!isset($GLOBALS[$key])) {
            $GLOBALS[$key] = NULL;
        }
        $_SESSION[$key] =& $GLOBALS[$key];
    }
}

session_register("LANG");

if($_REQUEST['LANG']){
    $_SESSION['LANG'] = $_REQUEST['LANG'];
    $GLOBALS['APPLICATION']->set_cookie("LANG", $_REQUEST['LANG'], time()+60*60, "/");
    LocalRedirect($_SERVER['HTTP_REFERER']);
}
$LANG = $GLOBALS['APPLICATION']->get_cookie("LANG");

define(LANG_ID, (($LANG == 'en')? 'en':'rus'));

if(isset($LANG) && $LANG == 'en' || LANG_ID == 'en'){
    $lang = 'en';
    $IB_MAIN = 2;
    $IB_PARTNERS = 4;
    $IB_LICENCE = 6;
    $IB_COMPETENCE = 8;
    $IB_CLIENTS = 10;
    $IB_PROJECTS = 12;
    $IB_PROJECTS_TAGS = 14;
}elseif (isset($LANG) && $LANG == 'rus' || LANG_ID == 'rus'){
    $lang = 'rus';
    $IB_MAIN = 1;
    $IB_PARTNERS = 3;
    $IB_LICENCE = 5;
    $IB_COMPETENCE = 7;
    $IB_CLIENTS = 9;
    $IB_PROJECTS = 11;
    $IB_PROJECTS_TAGS = 13;
}else{
    $lang = 'rus';
    $IB_MAIN = 1;
    $IB_PARTNERS = 3;
    $IB_LICENCE = 5;
    $IB_COMPETENCE = 7;
    $IB_CLIENTS = 9;
    $IB_PROJECTS = 11;
    $IB_PROJECTS_TAGS = 13;
}

//print_r($_SESSION);

define('IBLOCK_MAIN', $IB_MAIN);
define('IBLOCK_PARTNERS', $IB_PARTNERS);
define('IBLOCK_LICENCE', $IB_LICENCE);
define('IBLOCK_COMPETENCE', $IB_COMPETENCE);
define('IBLOCK_CLIENTS', $IB_CLIENTS);
define('IBLOCK_PROJECTS', $IB_PROJECTS);
define('IBLOCK_PROJECTS_TAGS', $IB_PROJECTS_TAGS);


if($_REQUEST['aa']){
    print_r($LANG);echo"\r\n";
    print_r(LANG_ID);die;
}