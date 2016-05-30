   <table border=1 title="Datos del envio" class="table table-condensed">
          <caption>Reportes Proyectos</caption>
            <thead>
            <tr>        

      <th>
      proyecto

    </th><th>
      nombre_proyecto

    </th><th>
      fecha_iniciopla

    </th><th>
      fecha_inicio_real

    </th><th>
      fecha_terminopla

    </th><th>
      fecha_termino_real

    </th><th>
      valor_material

    </th><th>
      valor_material_diario

    </th><th>
      horas_planificadas

    </th><th>
      horas_humanos

    </th><th>
      valor_humano

    </th><th>
      registro_humano

    </th><th>
      nombre_usuario
    </th>    
      </tr>
        </thead>
        <tbody>
<?php foreach($query as $item){
echo('<tr>');
foreach($item as $p){
   echo('<td>' . $p . '</td>'); 
}
 echo('</tr>');
}
?>
  </tbody>
    </table>
