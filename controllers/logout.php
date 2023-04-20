<?php 



session_start();
if(isset($_GET['action']) && $_GET['action'] === 'logout') {

$_SESSION=[];
unset($_SESSION);
session_destroy();
}
header('Location: ./');
exit();