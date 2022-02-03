<?php
include('../php/config.php');
include ('../php/userclass.php');
$user = new userClass();
$errorMsgReg="";
if (!empty($_POST['register_email']) && !empty($_POST['register_pass'])) 
{
    
    $email=$_POST['register_email'];
    $pass=$_POST['register_pass'];
    $airport=$_POST['register_airport'];
    /* Regular expression check */

    $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.([a-zA-Z]{2,4})$~i', $email);
    $password_check=preg_match('~^[A-Za-z0-9]{6,}$~i',$pass);
    //$password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,}$~i', $pass);

    if($email_check && $password_check >0) 
    {
        $id=$user->userRegister($email,$pass,$airport);
        if($id)
        {
            $url=BASE_URL. "../app/home";
            header("Location: $url"); // Page redirecting to home.php 
        }
        else
        {
            $errorMsgReg=" Email already exists.Please enter another email.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0"> 
    <meta http-equiv="Last-Modified" content="0"> 
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> 
    <meta http-equiv="Pragma" content="no-cache">
    <title>Organizing Your Trip - Registro</title>
    <link rel="shortcut icon" href="/res/media/icon.svg" type="image/x-icon">
    
    <link rel="stylesheet" type="text/css" href="/res/css/style.css">
    
    
</head>
<body>
    <main>
        <div class="register">
            <form id="container_register" class="container_register" method="post" action="" name="singup-form">
                <fieldset>
                    <div class="register_logo">
                        <a href="../../index" class="register_logo_link">
                            <img class="logo" src="/res/img/logo.svg" alt="Organiza tu Viaje" srcset="">
                        </a>
                    </div>                                     
                 
                    <div class="email_register">
                        <div class="email_label_register">
                            <label  class="email_label_item_register" for="email"> E-Mail </label>                        
                        </div>
                        <div class="error">
                          <?php     echo  $errorMsgReg;                        ?>
                        </div>                      
                       
                        <div class="email_label_input_register">
                            <input class="email_input_input_register" type="email" name="register_email" id="register_email" autocomplete="off" placeholder="Introduce tu email" >
                        </div> 
                        <div class="fail" style="margin:10px 0;color:red;">

                        <div id="required" class="required non">
                            
                            <img src="../res/media/atentio.svg" class="atention_required" alt="" srcset="">
                            Por favor introduzca un mail valido.
                            
                        </div>                   
                
                    </div>
                    <div   class="pass_register">
                        <div class="pass_label_register">
                            <label class="pass_label_item_register" for="pass" > Contraseña </label>                        
                        </div>
                        
                        <div class="pass_label_input_register">
                            <input class="pass_input_input_register" type="password" name="register_pass" id="register_pass" autocomplete="off" placeholder="Introduce tu contraseña" required  >
                        </div> 

                        <div class="pass_label_register">
                            <label class="pass_label_item_register" for="pass" > Confirmar Contraseña </label>                        
                        </div>
                        
                        <div class="pass_label_input_register">
                            <input class="pass_input_input_register" type="password" name="register_pass_pass" id="register_pass2" autocomplete="off" placeholder="Confirma tu contraseña"  >
                        </div> 
                        
                        <div id="required_pass" class="required non">
                            <img src="../res/media/atentio.svg" class="atention_required" alt="" srcset="">
                            Las constraseñas no coinciden.
                        </div>  

                            
                         
                
                    </div>
                    

                    <div class="airport_register">
                        <div class="airport_label_register">
                            <label  class="airport_label_item_register" for="airport"> Aeropuerto Salida</label>                        
                        </div>
                        
                        <div class="airport_label_input_register">
                            <input class="airport_input_input_register" type="text" name="register_airport" id="register_airport"  placeholder="Introduce tu Aeropuerto de salida " autocomplete="off">
                            
                        </div>   
                        <div id="datalistdiv" class="datalist">
                           <ol id="datalist" ></ol>
                        </div>
                                         
                
                    </div>       
                </fieldset>
                <fieldset>
                    <div class="term">
                        Al registrarte aceptas el <a href="../uhp/userAgreement" class="user">Acuerdo de Usuario</a> y has leido la <a href="../uhp/privacyPolicy" class="polity">Política de privacidad</a>.

                    </div>
                    
                    <button type="submit" name="register" id="button_register" class="button_register">Registrarse</button>
                    <div class="login_register">
                        <a href="/account/login">¿Ya tienes cuenta? Inicia Sesion.</a>

                    </div>
                    
                             
                </fieldset>

                
                

            </form>
            <!--<div id="email_info" class="email_info">
                        <h3>Introduce un Email valido</h3>
                        
            </div>  
-->
            
            <div id="pass_info" class="pass_info non">
                        <h3>La contraseña debe tener:</h3>
                        <ul>
                            <li id="letter" class="invalid">Al menos una letra minúscula</li>
                            <li id="capital" class="invalid">Al menos una letra mayúscula</li>
                            <li id="number" class="invalid">Al menos un número</li>
                            <li id="length" class="invalid">Al menos 6 carácteres</li>          
                            <li id="match" class="invalid">Las contraseñas deben cohincidir</li>
                            <li id="blank" class="invalid">Las contraseñas no deben tener espacios</li>
                            <li id="null" class="invalid">Debe confirmar la contraseña</li>
            
                        </ul>
            </div>      
                       
        </div>


    </main>
    <script type="text/javascript" src="/../res/js/js.js"></script>
    <script type="text/javascript" src="/../res/js/autocomplete.js"></script>
    <footer id="footer" class="footer">
    <p>&copy;2021 OrganizingYourTrip.com</p>
    <a href="../uhp/userAgreement.html">User Agreement</a>
    <a href="../uhp/privacyPolicy.html">Privacy Policy</a>
    <a href="../uhp/cookies.html">Cookies</a>
    <a href="../php/contact.php">Contacto</a>
    </footer>

</body>

</html>