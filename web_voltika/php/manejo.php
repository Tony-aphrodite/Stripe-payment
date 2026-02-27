<?php

$resp = array();

require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nombre = $_POST["nombre"];
$modelo = $_POST["modelo"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$cp = $_POST["cp"];
$fecha = $_POST["fecha"];
$ubicacion = $_POST["ubicacion"];
$freg = date("Y-m-d")." / ".date("H:i");
$cuerpo = '<h3>Solicitud de prueba de manejo del sitio web www.voltika.mx con la siguiente información:</h3><br><p>Nombre: <b>'.$nombre.'</b><br>Email: <b>'.$email.'</b><br>Teléfono: <b>'.$telefono.'</b><br>Código Postal: <b>'.$cp.'</b><br><br>Fecha: <b>'.$fecha.'</b><br>Ubicación de la prueba: <b>'.$ubicacion.'</b><br>Modelo a probar: <b>'.$modelo.'</b>';



/*$params = array(
"message" => "Hyundai Camiones: estamos atendiendo tu solicitud, conoce nuestra gama en www.hyundaicamiones.mx",
"numbers" => $telefono,
"country_code" => "52"
);
$headers = array(
"apikey: 7808f9bfc9a899f727cdfed97ff08e1c2747353b"
);
curl_setopt_array($ch = curl_init(), array(
CURLOPT_URL => "https://api.smsmasivos.com.mx/sms/send",
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HEADER => 0,
CURLOPT_HTTPHEADER => $headers,
CURLOPT_POST => 1,
CURLOPT_POSTFIELDS => http_build_query($params),
CURLOPT_RETURNTRANSFER => 1
));
$response = curl_exec($ch);
curl_close($ch);*/

array_push($resp, array("status" => "ok"));
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.ionos.mx";
$mail->Port = "465";
$mail->Username = "voltika@riactor.com";
$mail->Password = "Lemon2022;";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->setFrom('voltika@riactor.com', 'Voltika México');
$mail->addAddress('redes@voltika.com.mx');
$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';
$mail->isHTML(true);
$mail->Subject = 'Solicitud de prueba de manejo Web Voltika';
$mail->Body = $cuerpo;
$mail->AltBody = $cuerpo;
$mail->send();



echo json_encode($resp);

?>