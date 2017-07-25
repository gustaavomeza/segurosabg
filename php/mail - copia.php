
<?php





$email = $_POST["email"];


$html = '<p>Hola '.$email.' estamos realizando una plantilla para la rapida construccion de correos web.';



require_once 'swiftmailer/lib/swift_required.php';




$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 25, 'tls')
    ->setUsername('segurosabgoficial@gmail.com')
    ->setPassword('Mexico01%%');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Correo en portal web')
  ->setFrom(array($email => 'gustavo meza'))
  ->setTo(array('desarrolloweb@disoft.mx' => 'Desde el sitio web.'))


  

  ->setBody($html,'text/html')




  ;


$result = $mailer->send($message);




?>



