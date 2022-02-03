<?php   


if(!empty($_SESSION['uid']))
{
    $session_id=$_SESSION['ID'];
    include('../php/userClass.php');
    $user = new userClass();
}
if(empty($session_id))
{
    $url=BASE_URL.'index.php';
    header("Location: $url");
}






?>