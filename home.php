<?php
include('php/config.php');
include('php/session.php');
$userDetails=$user->userDetail($session_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    BIENVENIDO <?php echo $userDetails->EMAIL;?>

    <div><a href="<?php echo BASE_URL?>/php/logout">Salir</a></div>
</body>
</html>