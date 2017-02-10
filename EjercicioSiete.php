<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio Sietet</title>
    <script src="js/jquery-3.1.1.js"></script>
    <script>
        function calcularLt (){
            var km = $("#Kmt").val();
            $.ajax({
                method: "POST",
                url: "EjSieteCalculo.php?Calculo="+km,
                data: { Kmt: km}
            })

                .done(function( msg ) {

                    texto = document.getElementById("caja")
                    texto.innerHTML =  msg + " Litros";


                });
        }

    </script>
    <style type="text/css">

        #caja{
            color: floralwhite;
            background-color: dimgray;
            font-size: 30px;
            border-radius: 20px;
        }

    </style>
</head>
</head>
<body>

<form name="formulario">
    <h3>Cuantos litros de gasolina gastara su vehiculo en un recorrido</h3>
    <br>
    <div>Digite el numero de Kilometros de Recorrido:</div>
    <br>
    <input type="text" name="km" id="Kmt">
    <br>
    <br>
    <input type="button" name="boton" value="Calcular Litros" onclick="calcularLt()">
    <br>
</form>

<br><div>La cantidad de combustible que gastara seran </div><a id="caja" ></a>


</body>
</html>