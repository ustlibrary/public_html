<?php
session_start();
if(!isset($_SESSION['user_id']))
{require('login_tools.php');  load(); }
$page_title='Good bye' ;
$_SESSION =array();

load('/');
session_destroy();

?>