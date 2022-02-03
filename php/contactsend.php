<?php 
include ('userclass.php');
$mail = new mail();
$men='';
$ok='';
if(isset($_POST['contact_email']) && isset($_POST['name']) && isset($_POST['text'])){

    $email=$_POST['contact_email'];
    $name=$_POST['name'];
    $message=$_POST['text'];

    $mails='From:'.$email;

    $mail->send($mail,$name,$message);
    
    $ok='Mensaje enviado.Nos pondemos en contacto contigo a la mayoy brevedad posible.';
    
    

}else{

    $men='Please check all data';
}








?>