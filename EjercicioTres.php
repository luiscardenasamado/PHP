<html>
<head>
    <title>area o longitud de un circulo ó circunferencia</title>
</head>
<body>
<style type="text/css">
    nav{
        width:500px;
        margin:0 auto;
    }
    div
    {
        display: flex;
        width: 700px;
        height: 100px;
        background-color: lightblue;


    }
    div .menu{
        width: 100px;
        height: 40px;
        margin: 40px;
        margin-left: 70px;
        background-color: white;
        text-align: center;
        border-radius: 8px;

    }
    p
    {
        margin: 30px;
    }

</style>


<nav>
    <div>
        <form name="formas" method="post" action="EjercicioTres.php">
            <p> digite el radio: <input type="number" name="radio" required > </p>
            <button type="submit" >Calcular</button>

        </form>

    </div>
</nav>
<?php

          $radio = $_POST['radio'];
          $areat = 3.14 * ($radio * $radio);
          echo "el valor del area ( A=PI*r^2) del circulo es:  " . $areat;


      ?>