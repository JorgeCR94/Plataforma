<?php
/**
 * Created by PhpStorm.
 * User: JorgeArturo
 * Date: 10/11/2017
 * Time: 07:45 AM
 */

$name = $_POST['name'];
$description = $_POST['description'];
$start = $_POST['start'];
$end = $_POST['end'];
header('Content-Type: application/json');

$datos = array(
    'estado' => 'ok',
    'name' => $name,
    'description' => $description,
    'start' => $start,
    'end' => $end
);
echo json_encode($datos, JSON_FORCE_OBJECT);

?>