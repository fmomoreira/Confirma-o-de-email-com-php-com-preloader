<?php
require("conecta.php");

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'vendor/autoload.php';
// Instantiation and passing `true` enables exceptions
$nome = $_POST["nome"];
$email = $_POST["email"];
$codigo = MD5($email);

$mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                     // Enable verbose debug output
    $mail->isSMTP();      
    $mail -> charSet = "UTF-8";                                      // Send using SMTP
    $mail->Host       = 'aqui vai seu host do servidor';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'aqui vai seu email';                     // SMTP username
    $mail->Password   = 'aqui sua senha ';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to
    $mail->setFrom('aquivaiseuemail', 'aquiseu nome');
    $mail->addAddress($email, $nome);  
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Confirmar Email';
    //$mail->msgHTML(file_get_contents('boasvindas.html'), __DIR__);
    $mail->Body    = utf8_decode("
    <h5>Confirme seu email para continuar</h5>
    <h3>Clique aqui para confirmar</h3><a href='http://localhost/aquipastadoprojeto/aguardandoconfirmacao.php?codigo=$codigo'>Confirmar email</a>
    ");

    $retorno = array();
    
    
    
         

    if($mail->send()) {
        
        $inserir = "INSERT INTO confirmaremail";
        $inserir .= "(nome, email, cod)";
        $inserir .= "VALUES";
        $inserir .= "('$nome', '$email', '$codigo')";
        $retorno = array();
        $salvounobanco = mysqli_query($conn, $inserir);
        $msg = false;
    if($salvounobanco){
        header('Location: http://localhost/psicologia/aguardandoconfirmacao.php?codigo='.$codigo);
    }
    } else {
        echo "Não Salvou no banco";
    }
    ?>
  