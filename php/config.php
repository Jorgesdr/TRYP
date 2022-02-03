<?php  
session_start();
define('host','PMYSQL153.dns-servicio.com');
define('bdname','9038183_tryp');
define('user','tryp');
define('pass','#ho2Bx82');
define('BASE_URL','https://organizingyourtrip.com/');

function connectdb(){

    $host='PMYSQL153.dns-servicio.com';
    $bdname='9038183_tryp';
    $user='tryp';
    $pass='#ho2Bx82';


        try{
            $conn=new PDO("mysql:host=$host; dbname=$bdname",$user,$pass);
            $conn->exec("set names utf8");
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
            
        }catch(PDOException $pe){
            die("No se puedo conectar" .$pe->getMessage());
        }

}

?>