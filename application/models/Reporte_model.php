<?php
class Reporte_model extends CI_Model {

function acceder_reportes()

{
	
$sql="SELECT a.proyecto,a.nombre_proyecto,c.fecha_iniciopla,c.fecha_inicio_real,c.fecha_terminopla,c.fecha_termino_real,b.valor_material,d.valor_material_diario,a.horas_planificadas,c.horas_humanos,a.valor_humano,c.registro_humano,c.nombre_usuario
FROM (
SELECT t5.codigo_proyecto AS proyecto, t5.codigo_presupuesto as presupuesto,t5.fecha as fecha,t5.codigo_historial as codigo_historial,SUM( t6.`cantidad_horas` * t7.valor_hora ) AS valor_humano,SUM( t6.`cantidad_horas`) AS horas_planificadas,t4.codigo_usuario as usuario,t8.nombre_proyecto as nombre_proyecto
FROM plan_usuario AS t4, proyecto_historial AS t5, plan_trabajador AS t6, rol AS t7,proyecto as t8
WHERE t5.codigo_proyecto = t6.codigo_proyecto
AND t6.codigo_proyecto = t4.codigo_proyecto
AND t8.codigo_proyecto=t5.codigo_proyecto
AND t7.codigo_rol = t6.codigo_rol
AND t5.codigo_estado=3

GROUP BY t5.codigo_proyecto

) AS a, (

SELECT t2.codigo_proyecto AS proyecto, t5.codigo_presupuesto, SUM( t1.costo_material * t2.cantidad_material ) AS valor_material,
t5.codigo_estado as estado

FROM material AS t1, plan_material AS t2, plan_usuario AS t4, proyecto_historial AS t5
WHERE t1.codigo_material = t2.codigo_material
AND t5.codigo_proyecto = t2.codigo_proyecto
AND t5.codigo_proyecto = t4.codigo_proyecto
AND  t5.codigo_estado=3
GROUP BY t5.codigo_proyecto


) AS b,(

SELECT t5.codigo_proyecto AS proyecto, t5.codigo_presupuesto as presupuesto,t5.fecha as fecha,t5.codigo_historial as codigo_historial,SUM( t6.`cantidad_horas`) AS horas_humanos,SUM( t6.`cantidad_horas` * t7.valor_hora ) AS registro_humano,t4.codigo_usuario as usuario,t8.fecha_inicio as fecha_inicio_real ,t8.fecha_termino as fecha_termino_real,t9.fecha_inicio as fecha_iniciopla,t9.fecha_termino as fecha_terminopla,t10.nombre_usuario as nombre_usuario
FROM plan_usuario AS t4, proyecto_historial AS t5, registro_trabajador AS t6, rol AS t7,fecha as t8,proyecto as t9,usuario as t10
WHERE t5.codigo_proyecto = t6.codigo_proyecto
AND t5.codigo_proyecto=t9.codigo_proyecto
AND t5.fecha=t8.fecha
AND t10.codigo_usuario=t4.codigo_usuario
AND t6.codigo_proyecto = t4.codigo_proyecto
AND t7.codigo_rol = t6.codigo_rol
AND t5.codigo_estado=3
GROUP BY t5.codigo_proyecto

)
as c,
(
SELECT t5.codigo_proyecto AS proyecto,SUM( t1.costo_material * t2.cantidad_material ) AS valor_material_diario
FROM material AS t1, registro_material AS t2, plan_usuario AS t4, proyecto_historial AS t5
WHERE t1.codigo_material = t2.codigo_material
AND t5.codigo_proyecto = t2.codigo_proyecto
AND t5.codigo_proyecto = t4.codigo_proyecto
AND  t5.codigo_estado=3
GROUP BY t5.codigo_proyecto
)

as d


WHERE a.proyecto = b.proyecto AND d.proyecto=a.proyecto
AND c.proyecto=a.proyecto";


$query=$this->db->query($sql);

return $query->result_array();

}



}