<?php
if (!isset($_GET['codigo'])) {
    header('Location: index.php?mensaje=error');
    exit();
}

include 'model/conexion.php';
$codigo = $_GET['codigo'];

$sentencia = $bd->prepare("SELECT pro.promocion, pro.duracion , pro.id_apoderado, per.nombres , per.apellido_paterno ,per.apellido_materno,per.celular , per.fecha_nacimiento 
  FROM promociones pro 
  INNER JOIN apoderado per ON per.id = pro.id_apoderado 
  WHERE pro.id = ?;");
$sentencia->execute([$codigo]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);

    $url = 'https://api.green-api.com/waInstance1101816200/sendLocation/67b98ea6d32f410396aed9b53d06355beef34b8ae08e4fb68f';
    $data = [
        "chatId" => "51".$persona->celular."@c.us",
        "nameLocation"=> "Matricula",
        "address"=> "Av. Venezuela",
        "latitude"=> -16.40820194644723,
        "longitude"=> -71.52810407124387
    ];
    $options = array(
        'http' => array(
            'method'  => 'POST',
            'content' => json_encode($data),
            'header' =>  "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n"
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result);
    
    header('Location: agregarPromocion.php?codigo='.$persona->id_apoderado);

?>
