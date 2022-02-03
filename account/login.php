<?php               
        include('../php/config.php');
        include ('../php/userclass.php');
        $user=new userclass();       
        $error='';             
                
        if (!empty($_POST['login_email']) && !empty($_POST['login_pass'])) 
        {
            $email=$_POST['login_email'];
            $pass=$_POST['login_pass'];
            if(strlen(trim($email))>1 && strlen(trim($pass))>1 )
            {
                $id=$user->userLogin($email,$pass);
                if($id){
                $url=BASE_URL.'home.php';
                header("Location:$url"); // Page redirecting to home.php 
                }else
                {
            
                $error="Please check login details.";
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
    <title>Organizing Your Trip - Login</title>    
    <link rel="stylesheet" type="text/css" href="/res/css/style.css">
    <link rel="shortcut icon" href="/res/media/icon.svg" type="image/x-icon">
</head>
<body>
    <main>
        
        <div class="login">
            <form class="container_login" method="post" action="" name="sing-form">
                <fieldset>
                    <div class="login_logo">
                        <a  href="../../index.php" class="login_logo_link">
                            <img class="logo" src="/res/img/logo.svg" alt="Organiza tu Viaje" srcset="">
                        </a>
                    </div>
                    <div class="email_login">
                        <div class="email_label">
                            <label  class="email_label_item" for="email"> E-Mail</label>                        
                        </div>
                        
                        <div class="email_label_input">
                            <input class="email_input_input" type="email" name="login_email" id="login_email" autocomplete="off" placeholder="Introduce tu email" required>
                        </div>   
                        <div id="required" class="required non">
                            <img src="../res/media/atentio.svg" class="atention_required" alt="" srcset="">
                            Por favor introduzca un mail valido.
                        </div>                   
                
                    </div>
                    <div class="pass_login">
                        <div class="pass_label">
                            <label class="pass_label_item" for="pass"> Contraseña</label>                        
                        </div>
                        
                        <div class="pass_label_input">
                            <input class="pass_input_input" type="password" name="login_pass" id="login_pass" autocomplete="off" placeholder="Introduce tu contraseña">
                        </div>  
                        <div class="fail"><?php echo $error; ?></div> 
                        <div id="required" class="required non">
                            <img src="../res/media/atentio.svg" class="atention_required" alt="" srcset="">
                            Por favor introduzca una contraseña valida.
                        </div>                   
                
                    </div>
                </fieldset>
                <fieldset>
                    <div class="forgot_pass_active">
                        <div class="forgot_pass_active_input">
                            <input class="remember_checkbox" type="checkbox" name="remember_checkbox" id="remember_checkbox">
                            <label for="remember_checkbox"> Recuérdame</label>
                        </div>
                        <div class="forgot_pass_active_link">
                            <a class="remember_pass" href="/account/forgotpassword.php">¿Olvidaste la contraseña?</a>
                        </div>
                        
                    </div>
                    <button type="submit" name="submit"class="button_login">Iniciar Sesión</button>
                    <div class="create_account">
                        <a href="/account/register.php">¿No tienes cuenta? Crea una.</a>

                    </div>
                </fieldset>

                
                

            </form>
        </div>


    </main>
    <footer id="footer" class="footer">
    <p>&copy;2021 OrganizingYourTrip.com</p>
    <a href="../uhp/userAgreement.html">User Agreement</a>
    <a href="../uhp/privacyPolicy.html">Privacy Policy</a>
    <a href="../uhp/cookies.html">Cookies</a>
    <a href="../php/contact.php">Contacto</a>
    </footer>
</body>

</html>