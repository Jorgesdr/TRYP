<?php
include('config.php');
$session_id='';
$_SESSION['uid']=''; 
if(empty($session_id) && empty($_SESSION['ID']))
{
$url=BASE_URL.'index.php';
header("Location: $url");
//echo "";
}

?>