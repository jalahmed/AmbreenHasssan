<?php 
ob_start();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
  function site_url(){
    $_SERVER['FULL_URL'] = 'http';
    if($_SERVER['HTTPS']=='on'){$_SERVER['FULL_URL'] .=  's';}
    $_SERVER['FULL_URL'] .=  '://';
    if($_SERVER['SERVER_PORT']!='80') $_SERVER['FULL_URL'] .=  $_SERVER['HTTP_HOST'].':'.$_SERVER['SERVER_PORT'].$_SERVER['SCRIPT_NAME'];
    else
    $_SERVER['FULL_URL'] .=  $_SERVER['HTTP_HOST'];
    $doc_url = explode('/', trim($_SERVER['PHP_SELF'], '/'));
    array_pop($doc_url);
    $_SERVER['FULL_URL'] .= "/".implode('/',$doc_url);
    $_SERVER['FULL_URL'] .= (!empty($doc_url)) ? "/" : "";

    ///////////////////////////////////////////////
    return $_SERVER['FULL_URL'];
 }
 function get_controller(){
    return isset($_SESSION['controller']) ? $_SESSION['controller'] : false;
 }
 function get_action(){
    return isset($_SESSION['action']) ? $_SESSION['action'] : false;
 }
 function redirect_to($url) {
    print("<script> window.location.href='".$url."'</script>");
}
?>

