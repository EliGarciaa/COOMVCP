<?php 
	
	include 'modelo.php';

	if (isset($_GET["UserBox"])) {
		$Enviando = json_decode($_GET["UserBox"],true);
		$enviar = new Guardar($Enviando["nombre"], $Enviando["edad"]);
		$enviar->GuardarData();
			echo "Guardado Exitosamente";
	}

 ?>