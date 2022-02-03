<?php

$to='contact@organizingyourtrip.com';
$subject='Prueba';
$message='HOla probando';
$headers='From:jorge1439@hotmail.com'."\r\n".'Reply-To: jorge1439@hotmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to,$subject,$message,$headers);



?>