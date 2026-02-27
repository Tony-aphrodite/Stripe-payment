<?php
$mysqli = new mysqli("127.0.0.1", "voltika", "Lemon2022;", "voltika_", 3306);
$resp = array();


$cp = $_POST["cp"];

$colonia;
$estado;
$ciudad_li = "<option value=''>--- Selecciona una colonia ---</option>";

$query = "SELECT * FROM cp WHERE cp='$cp' group by colonia";
$result = $mysqli -> query($query);
while($row = $result->fetch_array()){
    $estado = $row["estado"];
    $ciudad = $row["ciudad"];
    $colonia_li = $colonia_li."<option value='".$row["colonia"]."'>".$row["colonia"]."</option>";
}
array_push($resp, array("status" => "ok", "estado" => $estado, "ciudad" => $ciudad, "colonia" => $colonia_li));

echo json_encode($resp);

?>