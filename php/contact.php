<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizing Your Trip - Contacto</title>
    <link rel="shortcut icon" href="/res/media/icon.svg" type="image/x-icon">
    <meta http-equiv="Expires" content="0"> 
    <meta http-equiv="Last-Modified" content="0"> 
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> 
    <meta http-equiv="Pragma" content="no-cache">
    
    <link rel="stylesheet" type="text/css" href="/res/css/style.css">
</head>
<body>
   <main>
       <div class="contact">
        <div class="fail"></div> 
        <div class="fail"></div> 
        <form if="container_contact" class="container_contact" method="post" action="contactsend.php" name="sing-form">
            <fieldset>
                <div class="contact_logo">
                    <a  href="../../index.php" class="contact_logo_link">
                        <img class="logo" src="/res/img/logo.svg" alt="Organiza tu Viaje" srcset="">
                    </a>
                </div>

                <div class="email_contact">
                    <div class="email_label_contact">
                        <label  class="email_label_item_contact" for="email"> E-Mail</label>                        
                    </div>
                    
                    <div class="email_label_input_contact">
                        <input class="email_input_input_contact" type="email" name="contact_email" id="contact_email" autocomplete="off" placeholder="Introduce tu email" required>
                    </div>   
                    <div id="required" class="required non">
                        <img src="../res/media/atentio.svg" class="atention_required" alt="" srcset="">
                        Por favor introduzca un mail valido.
                    </div>                   
            
                </div>
                <div class="name_contact">
                    <div class="name_label_contact">
                        <label class="name_label_item_contact" for="nombre"> Nombre</label>                        
                    </div>
                    
                    <div class="name_label_input_contact">
                        <input class="name_input_input_contact" type="text" name="name" id="name" autocomplete="off" placeholder="Introduce tu nombre">
                    </div>  
                    
                    <div id="requiredname" class="required non">
                        <img src="../res/media/atentio.svg" class="atention_required" alt="" srcset="">
                        Por favor introduzca tu nombre.
                    </div>                   
            
                </div>

                <div class="text_contact">
                    <div class="text_label_contact">
                        <label class="text_label_item_contact" for="text"> Mensaje</label>                        
                    </div>
                    
                    <div class="text_label_input_contact">
                        <textarea  class="text_input_input_contact"  name="text" id="text" autocomplete="off" placeholder="Si tiene alguna pregunta o comentario, este es el lugar para escribirlo."></textarea>
                    </div>  
                    <div class="fail"></div> 
                    <div id="requiredtext" class="required non">
                        <img src="../res/media/atentio.svg" class="atention_required" alt="" srcset="">
                        Tiene que escribir alguna pregunta o comentario.
                    </div>    



                </div>
            </fieldset>
            <fieldset>
                
                <button type="submit" name="contact" class="button_contact" id="button_contact">Enviar</button>
                
            </fieldset>

            
            

        </form>



       </div>



   </main>
   
    
</body>
<script type="text/javascript" src="/../res/js/validate.js"></script>
<footer id="footer" class="footer">
    <p>&copy;2021 OrganizingYourTrip.com</p>
    <a href="../uhp/userAgreement">User Agreement</a>
    <a href="../uhp/privacyPolicy">Privacy Policy</a>
    <a href="../uhp/cookies">Cookies</a>
    <a href="../uhp/contact">Contacto</a>
</footer>
</html>