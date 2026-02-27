<?php
$mysqli = new mysqli("127.0.0.1", "voltika", "Lemon2022;", "voltika_", 3306);
$resp = array();

require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$referido = $_POST["referido"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$razon = $_POST["razon"];
$rfc = $_POST["rfc"];
$direccion = $_POST["direccion"];
$ciudad = $_POST["ciudad"];
$estado = $_POST["estado"];
$cp = $_POST["cp"];
$e_nombre = $_POST["e_nombre"];
$e_telefono = $_POST["e_telefono"];
$e_direccion = $_POST["e_direccion"];
$e_ciudad = $_POST["e_ciudad"];
$e_estado = $_POST["e_estado"];
$e_cp = $_POST["e_cp"];
$modelo = $_POST["modelo"];
$color = $_POST["color"];
$tpago = $_POST["tpago"];
$tenvio = $_POST["tenvio"];
$precio = $_POST["precio"];
$penvio = $_POST["penvio"];
$total = $_POST["total"];

$pedido = time();

$freg = date("Y-m-d")." / ".date("H:i");
$cuerpo = '<HTML
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Confirmación de compra</title>
</head>
<body style="margin:0;padding:0;background:#f5f7fa;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f5f7fa;">
    <tr>
      <td align="center" style="padding:24px;">
        <table role="presentation" width="680" cellpadding="0" cellspacing="0" style="max-width:680px;width:100%;background:#ffffff;border-radius:8px;overflow:hidden;">
          <!-- Header -->
          <tr>
            <td style="padding:28px 28px 8px 28px;font-family:Arial,Helvetica,sans-serif;">
              <h1 style="margin:0 0 8px 0;font-size:24px;line-height:1.3;color:#111827;">Tu Voltika ya es tuya.</h1>
              <p style="margin:0 0 8px 0;font-size:14px;line-height:1.6;color:#6b7280;">
                Ya eres parte de esta revolución que cambiará la forma en la que nos movemos.
              </p>
              <p style="margin:0;font-size:14px;line-height:1.6;color:#111827;"><strong>¡Muchas gracias!</strong></p>
            </td>
          </tr>

          <!-- Divider -->
          <tr>
            <td style="padding:0 28px;">
              <hr style="border:0;border-top:1px solid #e5e7eb;margin:16px 0;">
            </td>
          </tr>

          <!-- Dos columnas: Confirmación / Resumen -->
          <tr>
            <td style="padding:0 28px 8px 28px;font-family:Arial,Helvetica,sans-serif;">
              <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <!-- Col 1 -->
                  <td valign="top" style="width:50%;padding-right:12px;">
                    <h2 style="margin:0 0 8px 0;font-size:18px;color:#111827;">Confirmación de tu pedido</h2>
                    <ul style="margin:0;padding-left:18px;color:#111827;font-size:14px;line-height:1.7;">
                      <li><strong>Número de orden:</strong> '.$pedido.'</li>
                      <li><strong>Fecha de compra:</strong> '.$freg.'</li>
                      <li><strong>Correo electrónico:</strong> '.$email.'</li>
                      <li><strong>Método de pago seleccionado:</strong> '.$tpago.'</li>
                      <li><strong>Tipo de envío:</strong> '.$tenvio.'</li>
                      <li><strong>Total pedido:</strong> $'.$total.' MXN</li>
                    </ul>
                  </td>
                  <!-- Col 2 -->
                  <td valign="top" style="width:50%;padding-left:12px;">
                    <h2 style="margin:0 0 8px 0;font-size:18px;color:#111827;">Resumen de unidades adquiridas</h2>
                    <ul style="margin:0;padding-left:18px;color:#111827;font-size:14px;line-height:1.7;">
                      <li><strong>Modelo:</strong> '.$modelo.'</li>
                      <li><strong>Color:</strong> '.$color.'</li>
                    </ul>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Divider -->
          <tr>
            <td style="padding:0 28px;">
              <hr style="border:0;border-top:1px solid #e5e7eb;margin:16px 0;">
            </td>
          </tr>

          <!-- Siguientes pasos -->
          <tr>
            <td style="padding:0 28px 8px 28px;font-family:Arial,Helvetica,sans-serif;">
              <h2 style="margin:0 0 6px 0;font-size:18px;color:#111827;">Siguientes pasos</h2>
              <p style="margin:0 0 14px 0;font-size:13px;line-height:1.7;color:#6b7280;">
                Por favor lee con atención los siguientes pasos de tu Compra en Línea para obtener tu voltika:
              </p>

              <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <!-- Retiro -->
                  <td valign="top" style="width:50%;padding-right:12px;">
                    <h3 style="margin:0 0 8px 0;font-size:16px;color:#111827;">Retiro en Punto Voltika</h3>
                    <ol style="margin:0;padding-left:18px;color:#111827;font-size:14px;line-height:1.7;">
                      <li>Acude a tu Punto Voltika más cercano con tu cuenta y número de orden.</li>
                      <li>Identificación y validación: presenta tu identificación oficial para vincular la orden con tu cuenta.</li>
                      <li>Entrega: recoge tu moto Voltika el mismo día (salvo que hayas solicitado accesorios o personalización que requieran instalación).</li>
                      <li>Correos automáticos:</li>
                    </ol>
                    <ul style="margin:6px 0 0 18px;padding:0;color:#6b7280;font-size:13px;line-height:1.7;">
                      <li>Confirmación del pedido.</li>
                      <li>Factura electrónica (CFDI) una vez cerrada la operación.</li>
                      <li>Instrucciones de recolección.</li>
                    </ul>
                  </td>

                  <!-- Envío -->
                  <td valign="top" style="width:50%;padding-left:12px;">
                    <h3 style="margin:0 0 8px 0;font-size:16px;color:#111827;">Envío a domicilio</h3>
                    <ol style="margin:0;padding-left:18px;color:#111827;font-size:14px;line-height:1.7;">
                      <li>Revisa tu correo: recibirás tu factura electrónica y la guía de envío con el número de rastreo.</li>
                      <li>Tiempo estimado de entrega: <strong>5–8 días hábiles</strong> a partir de la confirmación de pago (sujeto a medio de envío y localidad).</li>
                      <li>Activación de garantía: sigue las instrucciones adjuntas en tu correo o escanea el QR que llegará con tu unidad.</li>
                    </ol>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Correos que debes recibir -->
          <tr>
            <td style="padding:12px 28px 4px 28px;font-family:Arial,Helvetica,sans-serif;">
              <h2 style="margin:0 0 8px 0;font-size:18px;color:#111827;">Correos que debes recibir</h2>
              <ul style="margin:0;padding-left:18px;color:#111827;font-size:14px;line-height:1.7;">
                <li>Confirmación de pedido: enviado inmediatamente después de completar tu orden.</li>
                <li>Factura electrónica (CFDI): al finalizar el proceso de pago y validación.</li>
                <li>Guía de envío y rastreo (si aplica): cuando tu unidad salga de nuestro centro de distribución, así como instrucciones de envío si es necesario.</li>
              </ul>
            </td>
          </tr>

          <!-- Importante -->
          <tr>
            <td style="padding:16px 28px 28px 28px;font-family:Arial,Helvetica,sans-serif;">
              <p style="margin:0;font-size:12px;line-height:1.7;color:#6b7280;">
                <strong>Importante:</strong> revisa tu bandeja de entrada y spam. Si no los encuentras, escribe a
                <a href="mailto:ventas@voltika.com.mx" style="color:#2563eb;text-decoration:none;">ventas@voltika.com.mx</a>
                con tu número de orden.
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>';


$query = "INSERT INTO transacciones (referido,nombre,telefono,email,razon,rfc,direccion,ciudad,estado,cp,e_nombre,e_telefono,e_direccion,e_ciudad,e_estado,e_cp,modelo,color,tpago,tenvio,precio,penvio,total,freg,pedido) VALUES('$referido','$nombre','$telefono','$email','$razon','$rfc','$direccion','$ciudad','$estado','$cp','$e_nombre','$e_telefono','$e_direccion','$e_ciudad','$e_estado','$e_cp','$modelo','$color','$tpago','$tenvio','$precio','$penvio','$total','$freg','$pedido') ";
if($result=$mysqli->query($query)){
    array_push($resp, array("status"=>"ok","pedido"=>$pedido,"freg"=>$freg,"email"=>$email,"tpago"=>$tpago,"total"=>$total,"modelo"=>$modelo,"color"=>$color,"tpago"=>$tpago,"tenvio"=>$tenvio));
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
    $mail->addAddress($email);
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    $mail->isHTML(true);
    $mail->Subject = 'Gracias por tu compra en www.voltika.mx';
    $mail->Body = $cuerpo;
    $mail->AltBody = $cuerpo;
    $mail->send();
}
else
{
    array_push($resp, array("status" => "error"));
}

echo json_encode($resp);

?>