$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$email = $_POST["cuadro"];

$to = "lucilabongiovanni@email.com";
$subject = "Asunto del email";
$message = "Este es mi primer envío de email con PHP";
 
mail($to, $subject, $message);