<?php
if ($_GET['Calculo'] > 0) {
    $km = $_POST["Kmt"];
    $Lt = $km * 16.4;
    echo $Lt;
}
else if ($_GET['Calculo'] < 0)
{
    echo "Tienes que introducir un valor Positivo";
}
else
{
    echo "Introduce un Valor";
}