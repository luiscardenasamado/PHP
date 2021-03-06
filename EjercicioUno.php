<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecuaci&oacute;n 2 Grado</title>
    <style>
        body{width:100%;text-align:center; background-color: aquamarine}
        #form-calc{margin:100px auto 100px auto; background-color: aqua}

        #resultado{margin-top:50px;}

        label{display:block; background-color: azure}

        input[type="button"]{margin-top:20px;}

    </style>
    <script>
        function calc2grad(a,b,c){
            discriminante=Math.pow(b,2)-4*a*c;
            if(discriminante<0){
                document.getElementById("info").innerHTML="No tiene soluciones [dis<0]"
            }else if(discriminante==0){
                document.getElementById("info").innerHTML="Tiene una sola soluci&oacute;n [dis==0]"
                document.getElementById("x1").value=parseFloat((-b)/(2*a));
            }else{
                document.getElementById("info").innerHTML="Tiene dos soluci&oacute;n [dis>0]"
                document.getElementById("x1").value=parseFloat(((-b)+Math.sqrt(discriminante))/(2*a));
                document.getElementById("x2").value=parseFloat(((-b)-Math.sqrt(discriminante))/(2*a));
            }
        }
        window.onload = function(){
            var but = document.getElementById("calc");
            but.addEventListener('click',function(){
                var a=parseFloat(document.getElementById("a").value);
                var b=parseFloat(document.getElementById("b").value);
                var c=parseFloat(document.getElementById("c").value);
                calc2grad(a,b,c);
            },false);
        }
    </script>
</head>

<body>
<div id="form-calc">
    <h2>Zona de Datos</h2>
    <label for="a">Ingrese A:</label>
    <input type="number" id="a"/>
    <label for="b">Ingrese B:</label>
    <input type="number" id="b"/>
    <label for="c">Ingrese C:</label>
    <input type="number" id="c"/>
    <br />
    <input type="button" id="calc" value="Calcular"/>

    <div id="resultado">
        <h2>Zona de Resultados</h2>
        <p id="info"></p>
        <label>x1</label>
        <input type="number" id="x1"/>
        <label>x2</label>
        <input type="number" id="x2"/>

    </div>
</div>
</body>
</html>