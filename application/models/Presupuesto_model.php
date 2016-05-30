<?php
class Presupuesto_model extends CI_Model {


function inicializar_presupuesto($codigo_proyecto,$estado_presupuesto)
	{

	$fecha=getdate();
	$date=$fecha["year"] .'-'. $fecha["mon"] .'-'.$fecha["mday"];

	$sql = "INSERT INTO  presupuesto(codigo_proyecto,estado_presupuesto,fecha) VALUES (".$codigo_proyecto.",".$estado_presupuesto.",'".$date."');";
	return $sql;

	}



	function actualizar_presupuesto($codigo_presupuesto,$codigo_proyecto)

	{

$act="UPDATE presupuesto set estado_presupuesto=1,codigo_proyecto=".$codigo_proyecto." where codigo_presupuesto=".	$codigo_presupuesto.";";

return $act;

	}		
function ver_estado_presupuesto($codigo_presupuesto)
	{
	
 $act="select codigo_estado from proyecto_historial where codigo_historial='".$codigo_presupuesto."';";
return $act;

	}




}


?>