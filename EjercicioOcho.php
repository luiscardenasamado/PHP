<!DOCTYPE html>
<html>
<title></title>
<head>
    <script src="js/jquery-3.1.1.js"></script>
    <script>
      function calculo() {
          var Millas = $('#millas')
          $.ajax ({
              method : "POST",
              url :
              data: [millas: Millas]


          })

      }

    </script>
</head>
<body>
<h1>Convertir</h1>
<hr>
<p>Convertir de millas a milimetros</p>
<input type="number" id="millas">
<button onclick="calculo()">Calcular</button>
<hr>

</body>

</html>