<?php
$method = $_SERVER['REQUEST_METHOD'];

// tendremos que tratar esta variable para obtener el recurso adecuado de nuestro modelo.
$resource = $_SERVER['REQUEST_URI'];

// Dependiendo del m�todo de la petici�n ejecutaremos la acci�n correspondiente.
switch ($method)
{
	case 'GET':
		// c�digo para m�todo GET
		break;
	case 'POST':
		// c�digo para m�todo POST
		require_once('persona.php');		
		
		if(!isset($_POST['dna']))
		{
			echo "No se encontro valor en adn";
		}else
		{
			$Persona1 = new Persona();
			$Persona1->isMutant($_POST['dna']);
		}
		break;
	case 'PUT':
		// c�digo para m�todo PUT
		break;
	case 'DELETE':
		// c�digo para m�todo DELETE
		break;
	default:
		echo "ERROR";
}
// echo json_encode($response,true); // $response ser� un array con los datos de nuestra respuesta.
?>