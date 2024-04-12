<?php
include_once '../dbConnection.php';
session_start();
//echo $_SESSION['user'];
//echo $_SESSION['type'];
if(!isset($_SESSION['user'])) header('location:mot_de_passe_oublie.php');

$num = $_GET['num'];

$query="UPDATE docs
      SET color = 'green'
      WHERE num_docs = $num ";
mysqli_query($con,$query);
$query=" select num_e,categorie from docs where num_docs=$num";
$result = mysqli_query($con,$query);
$re=mysqli_fetch_row($result);


$query="select login,Nom from uesrs where Nom=$re[0]";
$result = mysqli_query($con,$query);
$res=mysqli_fetch_row($result);


//$email = 'fourniseur147@gmail.com';

//echo "95zeroual / fourniseur147@gmail.com";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {

    $mail->SMTPDebug = 2;                               // Enable verbose debug output

    $mail->isSMTP();                                       // Set mailer to use SMTP
    $mail->Host = "smtp.gmail.com";                     // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'moha2004zeroual@gmail.com';                 // SMTP username
    $mail->Password = '123zeroual45';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('moha2004zeroual@gmail.com');
    $mail->addAddress($res[0]);     // Add a recipient

//$mail->addAddress('ellen@example.com');

    $mail->addReplyTo('moha2004zeroual@gmail.com');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'A propos la demande de document administratif ';
    $mail->Body = " <b>Bonjour $res[1] votre demande du document '$re[1]' est en traitement. </b>";

//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // header('location : students.php');
    echo "message envoyé !";
} catch (Exception $e) {
    echo "message non envoyé !";}

header('location:demandes.php');
?>
