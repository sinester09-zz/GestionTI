
<!DOCTYPE html>
<html  lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
  
        <title>Reporte de Proyectos</title>
              
            <link rel="stylesheet" href="http://localhost/~alonsoarana/correos_we_service/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="http://localhost/~alonsoarana/correos_we_service/css/bootstrap-responsive.css" type="text/css">
        <script type="text/javascript" src="http://<?php echo base_url(); ?>js/jquery.js"></script>

                
        <script type="text/javascript" src="http://<?php echo base_url(); ?>js/jquery.dataTables.js"></script>
<script  type="text/javascript">

<?php

$indexedOnly = array();

foreach ($query as $row) {
    $indexedOnly[] = array_values($row);
}
$valor=json_encode($indexedOnly);



?>;

$(function(){
    $('#demo').html( '<table  class="display" id="example"></table>' );
   
   var datos=<?php print($valor) ?>; ;
   
    
  $('#example').dataTable( {
        "aaData": 
            /* Reduced data set */
            
            datos
            
        ,
        "aoColumns": [
            { "sTitle": " proyecto" },
            { "sTitle": "nombre_proyecto" },
            { "sTitle": "fecha_iniciopla" },
            { "sTitle": "fecha_terminopla"},
            { "sTitle": "fecha_termino_real" },
             { "sTitle": "valor_material" },
              { "sTitle": "fecha_termino_real" },
               { "sTitle": "valor_material_diario" },
                { "sTitle": "horas_planificadas" },
                  { "sTitle": "horas_humanos" },
                   { "sTitle": "  valor_humano" },  
                      { "sTitle": "registro_humano" },  
                     { "sTitle": "usuario" }
        ],
        
        "oLanguage":{
	        
	       "sUrl":"dataTables.spanish.txt" 
	        
        }
    } ); 
 
} );
</script>
           
           
              
              </head>
               <body>
        <div class="container">
        
        <div class="row">
        	<div class="span9 offset1">	
            	
              <div id="dynamic"> 
      <table class="display dataTable table table-bordered" id="example">
        
       </div>
 
 </div>
 </div>      		      
      
 </div>
 
                </body>
               </html>