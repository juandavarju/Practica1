<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Welcome to OpenShift</title>
  <style>
  html { 
  background: black; 
  }
  body {
    background: #333;
    background: -webkit-linear-gradient(top, black, #666);
    background: -o-linear-gradient(top, black, #666);
    background: -moz-linear-gradient(top, black, #666);
    background: linear-gradient(top, black, #666);
    color: white;
    font-family: "Helvetica Neue",Helvetica,"Liberation Sans",Arial,sans-serif;
    width: 40em;
    margin: 0 auto;
    padding: 3em;
  }
  a {
    color: white;
  }

  h1 {
    text-transform: capitalize;
    -moz-text-shadow: -1px -1px 0 black;
    -webkit-text-shadow: 2px 2px 2px black;
    text-shadow: -1px -1px 0 black;
    box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.5);
    background: #CC0000;
    width: 22.5em;
    margin: 1em -2em;
    padding: .3em 0 .3em 1.5em;
    position: relative;
  }
  h1:before {
    content: '';
    width: 0;
    height: 0;
    border: .5em solid #91010B;
    border-left-color: transparent;
    border-bottom-color: transparent;
    position: absolute;
    bottom: -1em;
    left: 0;
    z-index: -1000;
  }
  h1:after {
    content: '';
    width: 0;
    height: 0;
    border: .5em solid #91010B;
    border-right-color: transparent;
    border-bottom-color: transparent;
    position: absolute;
    bottom: -1em;
    right: 0;
    z-index: -1000;
  }
  h2 { 
    margin: 2em 0 .5em;
    border-bottom: 1px solid #999;
  }

  pre {
    background: black;
    padding: 1em 0 0;
    -webkit-border-radius: 1em;
    -moz-border-radius: 1em;
    border-radius: 1em;
    color: #9cf;
  }

  ul { 
    margin: 0; 
    padding: 0;
  }
  li {
    list-style-type: none;
    padding: .5em 0;
  }

  .brand {
    display: block;
    text-decoration: none;
  }
  .brand .brand-image {
    float: left;
    border: none;
  }
  .brand .brand-text {
    float: left;
    font-size: 24px;
    line-height: 24px;
    padding: 4px 0;
    color: white;
    text-transform: uppercase;
  }
  .brand:hover,
  .brand:active {
    text-decoration: underline;
  }

  .brand:before,
  .brand:after {
    content: ' ';
    display: table;
  }
  .brand:after {
    clear: both;
  }
  </style>

	<script type="text/javascript">
		function calcular(){
			if (formulario.numero.value.length == 0) {
				alert("Error:\nEl campo precio debe rellenarse.");
				formulario.numero.focus();
				return false;
 			}
			if (formulario.iva.value.length == 0) {
				alert("Error:\nEl campo iva debe rellenarse. ");
				formulario.iva.focus();
				return false;
 			}		
			if (isNaN(formulario.numero.value)) {
				alert("Error:\nEl campo precio debe tener sólo números.");
				formulario.numero.focus();
				return false;
 			}
			else if(parseFloat(formulario.numero.value)< 0){
				alert("Error:\nEl campo precio debe ser mayor que cero");
				formulario.numero.focus();
				return false;
			}
			if (isNaN(formulario.iva.value)) {
				alert("Error:\nEl campo iva debe tener sólo números.");
				formulario.iva.focus();
				return false;
 			}
			else if(parseFloat(formulario.iva.value)<= 0 || parseFloat(formulario.iva.value)>100){
				alert("Error:\nEl campo iva debe tener un valor entre 1 y 100");
				formulario.iva.focus();
				return false;
			}


			var importe;
			var totaliva;
			var numero;
			var iva;
			
			numero = parseFloat(formulario.numero.value);
			iva = parseFloat(formulario.iva.value);


			importe = numero + (numero * (iva/100));
			totaliva = numero * (iva/100);
			alert (importe);
		}

	


	</script>
</head>
<body>
  <section id = "principal">
		<h1> Calculadora de IVA </h1>
		<section id = "secundario">
			<h3> Esta aplicacion te calcula el IVA. Pon un importe en Euros y el porcentaje de IVA y dale a calcular para que la aplicación te muestre el importe calculado</h3>
		</section>

		<form action="procesar.php" method="post" id = "formulario">
                    <label for="numero">Precio:</label>
                    <input type = “number" id = "numero" name="numero" value = "introduzca el precio en euros" />
		    <br>
		    <label for="iva">% de IVA:</label>
                    <input type = “number" id = "iva" name="iva" value = "introduzca el % de IVA" size= "20" />
		    <br>
		    <br>
		
		   <input type = "button" id = "botonAceptar" onclick="calcular()" value = "Calcular"/>
		    <br>
	            <br>
		 </form>

	</section>

    </body>


</body>
</html>
