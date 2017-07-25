
<?php

if (empty($_POST['zona'])) {
  header('Location: ../index.php');
}

if ($_POST['zona'] == 'contacto') {

  $emailBody = file_get_contents("swiftmailer/plantilla/plantilla01.html");
  $exp_regular = array();
  
  $exp_regular[0] = '{APPATERNO}';
  $exp_regular[1] = '{APMATERNO}';
  $exp_regular[2] = '{NOMBREUSUARIO}';
  $exp_regular[3] = '{TELEFONO}';
  $exp_regular[4] = '{MOVIL}';
  $exp_regular[5] = '{EMAIL}';
  $exp_regular[6] = '{MENSAJE}';
  $exp_regular[7] = '{ZONA}';
  
  
  $cadena_nueva = array();
  $cadena_nueva[0] = $_POST['appaterno'];
  $cadena_nueva[1] = $_POST['apmaterno'];
  $cadena_nueva[2] = $_POST['nombreusuario'];
  $cadena_nueva[3] = $_POST['telefono'];
  $cadena_nueva[4] = $_POST['movil'];
  $cadena_nueva[5] = $_POST['email'];
  $cadena_nueva[6] = $_POST['mensaje'];
  $cadena_nueva[7] = $_POST['zona'];
  

}

if ($_POST['zona'] == 'Asegura tu Auto') {

  $emailBody = file_get_contents("swiftmailer/plantilla/plantilla02.html");
  $exp_regular = array();
  

  $exp_regular[0] = '{APPATERNO}';
  $exp_regular[1] = '{APMATERNO}';
  $exp_regular[2] = '{NOMBREUSUARIO}';
  $exp_regular[3] = '{FECHAUSUARIO}';
  $exp_regular[4] = '{CODIGOPOSTAL}';
  $exp_regular[5] = '{TELEFONO}';
  $exp_regular[6] = '{MOVIL}';
  $exp_regular[7] = '{EMAIL}';
  $exp_regular[8] = '{MARCA}';
  $exp_regular[9] = '{SUB}';
  $exp_regular[10] = '{TRANSMISION}';
  $exp_regular[11] = '{POERTAS}';
  $exp_regular[12] = '{QEMACOCOS}';
  $exp_regular[13] = '{AIIRE}';
  $exp_regular[14] = '{VERSIONMOTOR}';
  $exp_regular[15] = '{MODELO}';
  $exp_regular[16] = '{VERSION}';
  $exp_regular[17] = '{USO}';
  $exp_regular[18] = '{ZONA}';

  $cadena_nueva = array();
  $cadena_nueva[0] = $_POST['appaterno'];
  $cadena_nueva[1] = $_POST['apmaterno'];
  $cadena_nueva[2] = $_POST['nombreusuario'];
  $cadena_nueva[3] = $_POST['fechausuario'];
  $cadena_nueva[4] = $_POST['codigopostal'];
  $cadena_nueva[5] = $_POST['telefono'];
  $cadena_nueva[6] = $_POST['movil'];
  $cadena_nueva[7] = $_POST['email'];
  $cadena_nueva[8] = $_POST['marca'];
  $cadena_nueva[9] = $_POST['submarca'];
  $cadena_nueva[10] = $_POST['transmision'];
  $cadena_nueva[11] = $_POST['puertas'];
  $cadena_nueva[12] = $_POST['quemacocos'];
  $cadena_nueva[13] = $_POST['aire'];
  $cadena_nueva[14] = $_POST['versionmotor'];
  $cadena_nueva[15] = $_POST['modelo'];
  $cadena_nueva[16] = $_POST['version'];
  $cadena_nueva[17] = $_POST['uso'];
  $cadena_nueva[18] = $_POST['zona'];

  








}


if ($_POST['zona'] == 'Vida & Ahorro') {

  $emailBody = file_get_contents("swiftmailer/plantilla/plantilla03.html");
  $exp_regular = array();
  
  $exp_regular[0] = '{APPATERNO}';
  $exp_regular[1] = '{APMATERNO}';
  $exp_regular[2] = '{NOMBREUSUARIO}';
  $exp_regular[3] = '{FECHAUSUARIO}';
  $exp_regular[4] = '{CODIGOPOSTAL}';
  $exp_regular[5] = '{TELEFONO}';
  $exp_regular[6] = '{MOVIL}';
  $exp_regular[7] = '{EMAIL}';
  $exp_regular[8] = '{ZONA}';
  $exp_regular[9] = '{METAAHORRO}';

  $cadena_nueva = array();
  $cadena_nueva[0] = $_POST['appaterno'];
  $cadena_nueva[1] = $_POST['apmaterno'];
  $cadena_nueva[2] = $_POST['nombreusuario'];
  $cadena_nueva[3] = $_POST['fechausuario'];
  $cadena_nueva[4] = $_POST['codigopostal'];
  $cadena_nueva[5] = $_POST['telefono'];
  $cadena_nueva[6] = $_POST['movil'];
  $cadena_nueva[7] = $_POST['email'];
  $cadena_nueva[8] = $_POST['zona'];
  $cadena_nueva[9] = number_format($_POST['metaahorro']);

  

}


if ($_POST['zona'] == 'Educación Profesional') {

  $emailBody = file_get_contents("swiftmailer/plantilla/plantilla04.html");
  $exp_regular = array();
  
  $exp_regular[0] = '{APPATERNO}';
  $exp_regular[1] = '{APMATERNO}';
  $exp_regular[2] = '{NOMBREUSUARIO}';
  $exp_regular[3] = '{FECHAUSUARIO}';
  $exp_regular[4] = '{CODIGOPOSTAL}';
  $exp_regular[5] = '{TELEFONO}';
  $exp_regular[6] = '{MOVIL}';
  $exp_regular[7] = '{EMAIL}';
  $exp_regular[8] = '{APATERNOCONYUGE}';
  $exp_regular[9] = '{AMATERNOCONYUGE}';
  $exp_regular[10] = '{NOMBRECONYUGE}';
  $exp_regular[11] = '{NOMBREBENEFICIADO}';
  $exp_regular[12] = '{FECHABENEFICIADO}';
  $exp_regular[13] = '{ZONA}';
  $exp_regular[14] = '{METAAHORRO}';

  $cadena_nueva = array();
  $cadena_nueva[0] = $_POST['appaterno'];
  $cadena_nueva[1] = $_POST['apmaterno'];
  $cadena_nueva[2] = $_POST['nombreusuario'];
  $cadena_nueva[3] = $_POST['fechausuario'];
  $cadena_nueva[4] = $_POST['codigopostal'];
  $cadena_nueva[5] = $_POST['telefono'];
  $cadena_nueva[6] = $_POST['movil'];
  $cadena_nueva[7] = $_POST['email'];
  $cadena_nueva[8] = $_POST['appaternoconyuge'];
  $cadena_nueva[9] = $_POST['apmaternoconyuge'];
  $cadena_nueva[10] = $_POST['nombreconyuge'];
  $cadena_nueva[11] = $_POST['nombrebeneficiado'];
  $cadena_nueva[12] = $_POST['fechabeneficiado'];
  $cadena_nueva[13] = $_POST['zona'];
  $cadena_nueva[14] = number_format($_POST['metaahorro']);

}






if ($_POST['zona'] == 'Gastos Médicos Mayores') {

  $emailBody = file_get_contents("swiftmailer/plantilla/plantilla05.html");
  $exp_regular = array();
  
  $exp_regular[0] = '{APPATERNO}';
  $exp_regular[1] = '{APMATERNO}';
  $exp_regular[2] = '{NOMBREUSUARIO}';
  $exp_regular[3] = '{FECHAUSUARIO}';
  $exp_regular[4] = '{CODIGOPOSTAL}';
  $exp_regular[5] = '{TELEFONO}';
  $exp_regular[6] = '{MOVIL}';
  $exp_regular[7] = '{EMAIL}';
  $exp_regular[8] = '{ZONA}';


  $cadena_nueva = array();
  $cadena_nueva[0] = $_POST['appaterno'];
  $cadena_nueva[1] = $_POST['apmaterno'];
  $cadena_nueva[2] = $_POST['nombreusuario'];
  $cadena_nueva[3] = $_POST['fechausuario'];
  $cadena_nueva[4] = $_POST['codigopostal'];
  $cadena_nueva[5] = $_POST['telefono'];
  $cadena_nueva[6] = $_POST['movil'];
  $cadena_nueva[7] = $_POST['email'];
  $cadena_nueva[8] = $_POST['zona'];

}


$hostname = $_SERVER['REMOTE_ADDR'];
if ($hostname == '::1') {
  $emailDESTINO = 'desarrolloweb@disoft.mx';
  $nombreDESTINO = 'Ing. Gustavo Meza Temoltzi';
} else {
  $emailDESTINO = 'anabelen.ace@gmail.com';
  //$emailDESTINO = 'anabelen.ace@outlook.com';
  //$emailDESTINO = 'saulgtzvallejo@gmail.com';
  //$emailDESTINO = 'gustaavomeza@gmail.com';
  $nombreDESTINO = 'Dra. Ana Belen Ace Gallo';
}



$emailBody = preg_replace($exp_regular, $cadena_nueva, $emailBody);


$email = $_POST["email"];
$nombreusuario = $_POST["nombreusuario"];

require_once 'swiftmailer/lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 25, 'tls')
    ->setUsername('segurosabgoficial@gmail.com')
    ->setPassword('Mexico01%%');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('segurosabg.com.mx')
  ->setFrom(array($email => $nombreusuario))
  ->setTo(array($emailDESTINO => $nombreDESTINO))
  ->setBody($emailBody,'text/html')
  ;


$result = $mailer->send($message);


header('Location: ../gracias.php');


?>



