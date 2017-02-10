<!DOCTYPE html>
<html>
<head>
    <title>ejercicio5</title>
</head>
<body>

<ul>
    <li>escriba A si quiere ver los datos de los alumnos que midan mas de 1.75m</li>
    <li>escriba B si quiere ver los datos de los alumnos que tienen una edad mayor a 18</li>
    <li>escriba C si quiere ver todos los datos de los alumnos</li>
</ul>
    <form name="formas" method="post" action="EjercicioCinco.php.php">
        <p> Digite: <input type="text" name="estatura" required > </p>
        <button type="submit" >Calcular</button>
</form>
</body>
</html>


<?php

        $a = array(15,170);

        $b= array(16,166);

        $c= array(17,175);

        $d= array(18,160);

        $e= array(19,178);

        $estatura = $_POST["estatura"];

        if ($estatura == $a)
        {
            echo ("los alumnos que miden mas de 175 tienen --->(años,estatura): ".$c." y ".$e);
        }
        else if ($estatura == $b)
        {

            echo ("los alumnos que son mayores de 18 años  --->(años,estatura): ".$d." y ".$e);
        }
        else if ($estatura == $c)
        {
            echo ("los datos de los alumnos --->(años,estatura): ".$a." y ".$b." y ".$c." y ".$d." y ".$e);
        }

?>