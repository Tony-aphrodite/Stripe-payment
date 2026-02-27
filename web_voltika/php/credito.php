<?php
header('Content-Type: application/json; charset=utf-8');
ini_set('display_errors', 1);
error_reporting(E_ALL);

// ---- PHPMailer IMPORT ----
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';
require __DIR__ . '/PHPMailer/Exception.php';

// ---- MySQL ----
mysqli_report(MYSQLI_REPORT_OFF);

$resp = ["status"=>"error"]; // respuesta default

$db   = 'voltika_';
$user = 'voltika';
$pass = 'Lemon2022;';
$host = '127.0.0.1';
$port = 3306;

$mysqli = @new mysqli($host,$user,$pass,$db,$port);
if($mysqli->connect_errno){
    echo json_encode($resp);
    exit;
}

// ---- VARIABLES ----
$nombre = $_POST["nombre"] ?? '';

$ingreso    = $_POST["ingreso"] ?? '';
$t_ingreso  = $_POST["t_ingreso"] ?? '';
$c_ingreso  = $_POST["c_ingreso"] ?? '';

$modelo = $_POST["modelo"] ?? '';

$calle        = $_POST["calle"] ?? '';
$colonia      = $_POST["colonia"] ?? '';
$ciudad       = $_POST["ciudad"] ?? '';
$cp           = $_POST["cp"] ?? '';
$estado       = $_POST["estado"] ?? '';
$entrec1      = $_POST["entrec1"] ?? '';
$entrec2      = $_POST["entrec2"] ?? '';
$vives_tiempo = $_POST["vives_tiempo"] ?? '';
$vives_en     = $_POST["vives_en"] ?? '';

$telefono   = $_POST["telefono"] ?? '';
$tel_tiempo = $_POST["tel_tiempo"] ?? '';
$tel_wp     = $_POST["tel_wp"] ?? '';
$email      = $_POST["email"] ?? '';

$trabajo         = $_POST["trabajo"] ?? '';
$trabajo_tiempo  = $_POST["trabajo_tiempo"] ?? '';

$pagos_moto = $_POST["pagos_moto"] ?? '';
$uso_moto   = $_POST["uso_moto"] ?? '';
$km_moto    = $_POST["km_moto"] ?? '';

$freg = date("Y-m-d")." / ".date("H:i");
$id_op = time();

// ---- ARCHIVOS ----
$ine_f_url=""; 
$ine_r_url="";
$ine_t_url="";

$destinoFisico = __DIR__ . "/../docs/credito/";
$baseUrl       = "https://www.voltika.mx/docs/credito/";
$maxSize       = 3 * 1024 * 1024;

// crear carpeta si no existe
if(!is_dir($destinoFisico)){
    @mkdir($destinoFisico,0775,true);
}

function sanitizarNombreArchivo($nombre){
    $nombre = trim(strtolower($nombre));
    $buscar  = ['á','é','í','ó','ú','ñ'];
    $reempl  = ['a','e','i','o','u','n'];
    $nombre = str_replace($buscar,$reempl,$nombre);
    $nombre = str_replace(' ','-',$nombre);
    return preg_replace('/[^a-z0-9\.\-_]/','',$nombre);
}

function procesarArchivo($campo,$id_op,$destinoFisico,$baseUrl,$maxSize,$obligatorio=true){
    $r=["status"=>"","url"=>""];

    if(!isset($_FILES[$campo])){
        $r["status"] = $obligatorio?"files":"skip";
        return $r;
    }

    $f=$_FILES[$campo];

    if($f["name"]==""){
        $r["status"] = $obligatorio?"files":"skip";
        return $r;
    }

    if($f["error"]!==UPLOAD_ERR_OK){
        if($f["error"]===UPLOAD_ERR_INI_SIZE || $f["error"]===UPLOAD_ERR_FORM_SIZE){
            $r["status"]="size";
        }else{
            $r["status"]="error";
        }
        return $r;
    }

    if($f["size"]>$maxSize){
        $r["status"]="size";
        return $r;
    }

    $orig=sanitizarNombreArchivo($f["name"]);
    $ext = strtolower(pathinfo($orig,PATHINFO_EXTENSION));
    $nuevo = $id_op."_".$campo.".".$ext;

    if(move_uploaded_file($f["tmp_name"],$destinoFisico.$nuevo)){
        $r["status"]="ok";
        $r["url"] = $baseUrl.$nuevo;
    }else{
        $r["status"]="error";
    }
    return $r;
}

// subir archivos
$A=procesarArchivo("ine_f",$id_op,$destinoFisico,$baseUrl,$maxSize,true);
$B=procesarArchivo("ine_r",$id_op,$destinoFisico,$baseUrl,$maxSize,true);
$C=procesarArchivo("ine_t",$id_op,$destinoFisico,$baseUrl,$maxSize,false);

if($A["status"]!="ok" || $B["status"]!="ok"){
    echo json_encode($resp);
    exit;
}

$ine_f_url = $A["url"];
$ine_r_url = $B["url"];
if($C["status"]=="ok") $ine_t_url=$C["url"];

// ---- INSERT BD ----
$sql="INSERT INTO credito(
    nombre,ingreso,t_ingreso,c_ingreso,
    modelo,calle,colonia,ciudad,cp,estado,
    entrec1,entrec2,vives_tiempo,vives_en,
    telefono,tel_tiempo,tel_wp,email,
    trabajo,trabajo_tiempo,
    pagos_moto,uso_moto,km_moto,
    freg,
    ine_f_url,ine_r_url,ine_t_url,
    id_op
) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt=$mysqli->prepare($sql);
if(!$stmt){
    echo json_encode($resp);
    exit;
}

$stmt->bind_param("ssssssssssssssssssssssssssss",
    $nombre,$ingreso,$t_ingreso,$c_ingreso,
    $modelo,$calle,$colonia,$ciudad,$cp,$estado,
    $entrec1,$entrec2,$vives_tiempo,$vives_en,
    $telefono,$tel_tiempo,$tel_wp,$email,
    $trabajo,$trabajo_tiempo,
    $pagos_moto,$uso_moto,$km_moto,
    $freg,
    $ine_f_url,$ine_r_url,$ine_t_url,
    $id_op
);

if(!$stmt->execute()){
    $stmt->close();
    echo json_encode($resp());
    exit;
}
$stmt->close();

// ---- EMAIL ----
$cuerpo="
<h2>Solicitud de crédito Voltika</h2>
<p>Has recibido una solicitud de crédito con la siguiente información:</p>

<p><strong>Nombre completo:</strong> $nombre</p>
<p><strong>Modelo de interés:</strong> $modelo</p>
<br>
<p><strong>Ingreso mensual aproximado:</strong> $ingreso</p>
<p><strong>Su ingreso es:</strong> $t_ingreso</p>
<p><strong>Cada cuánto recibe ingresos:</strong> $c_ingreso</p>
<br>
<p><strong>Calle:</strong> $calle</p>
<p><strong>Colonia:</strong> $colonia</p>
<p><strong>Ciudad:</strong> $ciudad</p>
<p><strong>CP:</strong> $cp</p>
<p><strong>Estado:</strong> $estado</p>
<p><strong>Entre calles:</strong> $entrec1 y $entrec2</p>
<p><strong>Tiempo viviendo en esa dirección:</strong> $vives_tiempo</p>
<p><strong>Vives en:</strong> $vives_en</p>
<br>
<p><strong>Teléfono:</strong> $telefono</p>
<p><strong>Tiempo con el teléfono:</strong> $tel_tiempo</p>
<p><strong>WhatsApp en la línea:</strong> $tel_wp</p>
<p><strong>Email:</strong> $email</p>

<p><strong>Trabajo:</strong> $trabajo</p>
<p><strong>Tiempo trabajando:</strong> $trabajo_tiempo</p>

<p><strong>Quién realiza pagos de la moto:</strong> $pagos_moto</p>
<p><strong>Uso moto:</strong> $uso_moto</p>
<p><strong>KM moto diarios:</strong> $km_moto</p>

<p><strong>Fecha y hora de registro:</strong> $freg</p>

<p><strong>INE Frente:</strong> <a href='$ine_f_url'>$ine_f_url</a></p>
<p><strong>INE Reverso:</strong> <a href='$ine_r_url'>$ine_r_url</a></p>";

if($ine_t_url!=""){
    $cuerpo.="<p><strong>Comprobante de domicilio:</strong> <a href='$ine_t_url'>$ine_t_url</a></p>";
}

// enviar correo
try{
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = "smtp.ionos.mx";
    $mail->SMTPAuth   = true;
    $mail->Username   = "voltika@riactor.com";
    $mail->Password   = "Lemon2022;";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('voltika@riactor.com','Voltika México');
    $mail->addAddress('redes@voltika.com.mx');

    $mail->CharSet='UTF-8';
    $mail->isHTML(true);
    $mail->Subject='Solicitud de crédito Voltika';
    $mail->Body=$cuerpo;
    $mail->AltBody=strip_tags($cuerpo);

    $mail->send();

    $resp["status"]="ok";

}catch(Exception $e){
    // si falla correo, dejamos status="error"
}

// ---- RESPUESTA ----
echo json_encode($resp);