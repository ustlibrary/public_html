<?php
session_start();
if(!isset($_SESSION['ust_id']))
{require('login_tools.php');  load(); }
$page_title='Good bye' ;
$_SESSION =array();


session_destroy();
include('login.php');

?>