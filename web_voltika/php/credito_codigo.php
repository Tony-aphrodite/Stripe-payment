<?php

$resp = array();
$codigo = $_POST["codigo"];
$telefono = $_POST["telefono"];

$params = array(
"message" => "Tu código Voltika es: ".$codigo,
"numbers" => $telefono,
"country_code" => "52"
);
$headers = array(
"apikey: ff4cca0aee49e64c91465559c9ced18d785d838c"
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
curl_close($ch);

array_push($resp, array("status" => "ok"));

echo json_encode($resp);
?>