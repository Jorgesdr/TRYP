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
    <title>Organizing Your Trip</title>
    <link rel="shortcut icon" href="/res/media/icon.svg" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="res/css/style.css">
</head>
<body>
    <header>    
        
            <nav class="nav">
                <div class="nav_logo">
                    <label for="menu" class="nav_label">                   
                    <img class="logonav" src="/res/img/logo.svg" alt="Organiza tu Viaje" srcset="">                  
                        <img class="iconmenu" src="res/media/menu.svg" alt="">
                    </label>
                  
                </div> 

                 <div class="nav_menu">
                     <ul>                
                        <li class="itemmenu"><a href="index" class="nav_item1">Inicio</a></li>
                        <li class="itemmenu"><a href="/account/login" class="nav_item2">Nuevo Viaje</a></li>
                        <li class="itemmenu"><a href="/account/login" class="nav_item3">Mis Viajes</a></li>
                        <li class="itemmenu"><a href="/account/login" class="nav_item4">Iniciar Sesión</a><a href="/account/register" class="nav_item5">/Registrarse</a></li>
                    </ul>
               </div>  
            </nav>       
    </header>
    <main>
    <br>
    <br>
    <br>
    <br>
    <?php 
    
    include ('app/app.php');
    
    ?>
    <br>
    <br>

        
    </main>
    <footer id="footer" class="footer">
        <strong>&copy;2021 OrganizingYourTrip.com</strong>
        <a href="../uhp/userAgreement.html">User Agreement</a>
        <a href="../uhp/privacyPolicy.html">Privacy Policy</a>
        <a href="../uhp/cookies.html">Cookies</a>
        <a href="../php/contact">Contacto</a>
    </footer>   

    <div class="cookies_bar active" id="cookies_bar">
        <div class="cookies_bar_image">

        <img class="img_cookies" src="/res/media/cookie.svg" alt="Cookie" >
        </div>
        <div class="content_cookies">
        <h3>Aviso de Cookies </h3>
        <p> Utilizamos cookies propias y de terceros para obtener datos estadísticos de la navegación de nuestros usuarios y mejorar nuestros servicios. Si acepta consideramos que acepta su uso. Puede cambiar la configuración u obtener más información <a href="uhp/cookies.html">aquí</a>.  </p>
        </div>
        
        <button id="btn_cookies" class="btn_cookies" type="submit">Aceptar</button>
        
        
    </div>
    <div class="fontcookies activefont" id="fontcookies"></div>
    <script type="text/javascript" src="/../res/js/cookie.js"></script>
</body>


    

</html>