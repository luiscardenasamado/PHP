<?php
$nota= $_POST['nota'];
if ($nota > 5){
    echo "con su nota :". $nota ."---> Aprobo";
} elseif ( $nota<=5){
    echo " con su nota: ".$nota   ."---> Reprobo";
}