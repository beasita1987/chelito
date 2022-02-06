<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$destinatario = "angelaltamirano991@gmail.com";
$asunto = "contacto desde nuestra web"


$carta = "De: $nombre \n";   
$carta .= "Correo: $correo \n"; 
$carta .= "telefono: $telefono "; 


mail($destinaterio, $asunto , $carta);
header('Location:mensaje_de_envio.html');


?>