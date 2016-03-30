<?php
$method = $_SERVER['REQUEST_METHOD'];

// tendremos que tratar esta variable para obtener el recurso adecuado de nuestro modelo.
$resource = $_SERVER['REQUEST_URI'];

// Dependiendo del método de la petición ejecutaremos la acción correspondiente.
switch ($method)
{
	case 'GET':
		// código para método GET
		break;
	case 'POST':
		// código para método POST
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
		// código para método PUT
		break;
	case 'DELETE':
		// código para método DELETE
		break;
	default:
		echo "ERROR";
}
// echo json_encode($response,true); // $response será un array con los datos de nuestra respuesta.
?>