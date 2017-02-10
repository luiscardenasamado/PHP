<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 06/02/2017
 * Time: 9:31
 */

$dias = 800;
$segundos = $dias * 86400;
$velocidad = 299792.458;
$distancia = ($velocidad * $segundos);

echo "la distancia recorrida en".$dias."dias es de:".$distancia."km";