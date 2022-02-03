<?php

class mail{

    public function send($email,$name,$text){

        if (isset($email) && isset($name) && isset($text)) {
        $to='contact@organizingyourtrip.com';
        $headers=$email . 'X-Mailer: PHP/' . phpversion();

        mail($to,$name,$text,$headers) or die('Error');

        sleep(3);
        //header("Location: https://www.organizingyourtrip.com");
        }else{
            echo 'error';
        }
        


    }



}


class userclass{

    //login

    public function userLogin($email,$pass){

        try{
            $conn=connectdb();
            $passs=hash("sha256",$pass);
            $stmt=$conn->prepare("SELECT ID FROM users WHERE EMAIL=:login_email AND PASS=:login_pass");

            $stmt->bindParam(':login_email',$email,PDO::PARAM_STR);
            $stmt->bindParam(':login_pass',$passs,PDO::PARAM_STR);

            $stmt->execute();
            $count=$stmt->rowCount();
            $data=$stmt->fetch(PDO::FETCH_OBJ);
            $conn=null;
            if($count){
                $_SESSION['ID']=$data->ID;
                return true;

            }else{
                return false;
            }
        }catch(PDOException $e){
            echo'{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }

    //registro

    public function userRegister($email,$pass,$airport){
        
        try{
            $conn=connectdb();
            $sqlst="SELECT ID FROM users WHERE EMAIL=:email";
            $st=$conn->prepare($sqlst);
            $st->bindParam(":email",$email,PDO::PARAM_STR);
            
            $st->execute();
            $count=$st->rowCount();
            if($count<1){

                $sql="INSERT INTO users(EMAIL,PASS,AIRPORT,DATES) VALUES(:register_email,:passs,:register_airport,NOW())";

                $stmt=$conn->prepare($sql);

                $stmt->bindParam(':register_email',$email,PDO::PARAM_STR);
                $passs=hash("sha256",$pass);
                $stmt->bindParam('passs',$passs,PDO::PARAM_STR);
                $stmt->bindParam(':register_airport',$airport,PDO::PARAM_STR);
                //$stmt->bindParam(':dates',$date,PDO::PARAM_STR);
                
                $stmt->execute();
                $id=$conn->lastInsertId();
                $conn=null;
                $_SESSION['ID']=$id;
                return true;
            }else{
                $conn=null;
                return false;
            }



        }catch(PDOException $e){
            echo'{"error":{"text":'. $e->getMessage() .'}}'; 
            
        }

    }

    public function userDetail($id){
        try{
            $conn=connectdb();
            $stmt=$conn->prepare("SELECT EMAIL,AIRPORT FROM users WHERE ID=:id");
            $stmt->bindParam('ID',$id,PDO::PARAM_INT);
            $stmt->execute();
            $data=$stmt->fetch(PDO::FETCH_OBJ);
            return $data;
        }catch(PDOException $e){
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
}
?>