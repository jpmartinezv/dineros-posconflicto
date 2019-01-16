<?php 
$url_buscador = drupal_get_path('module', 'home');
$tema_ruta = drupal_get_path('theme','dineros');
drupal_add_js('http://bfintal.github.io/Counter-Up/jquery.counterup.min.js','external');
drupal_add_js('https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js','external');
drupal_add_js($tema_ruta.'/js/utils.js');
drupal_add_css($tema_ruta.'/css/style.css');
drupal_add_css($tema_ruta.'/font-awesome/css/font-awesome.min.css');
drupal_add_css('https://fonts.googleapis.com/css?family=Glegoo:400,700', 'external');
drupal_add_css('https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700', 'external');

// Total
$query = new EntityFieldQuery();
$query->entityCondition('entity_type', 'node')
    ->propertyCondition('status', 1)
    ->propertyCondition('type', array('contrato_asociado'));
$total = $query->count()->execute();

$ubicacion = taxonomy_get_parents_all($node->field_municipio_contratro['und'][0]['tid']);
?>


<article id="node-<?php print $node->nid?>" class="node-blog">

<div  class="container-fluid" id="contenido-interno">
  
  <div class="container">
        <div class="col-lg-4 col-md-4 col-xs-12 seccionador-destacados" style="width:fit-content;margin-bottom: 1em;">
            <div class="seccionador-destacados-texto">
            <h2>CONTRATO ASOCIADO</h2>
            </div>
        </div>
        </div>

  <div class="container ficha-contrato">
  <div class="nombre-contrato">
<h1>Nombre del contrato: <?php print $node->title; ?></h1>
  </div>
    <div class="objeto-contrato container">
    <h2>Objeto del contrato:</h2>
    <div class="texto-objeto">
    <?php print render($content['body']); ?>
  </div>
    </div>
    <div class="col-lg-12 col-md-12 col-xs-12">
            <table class="tg">
  <tr>
    <div class="col-lg-6  col-md-6 col-xs-6"><td class="tg-0lax" id="label2">Valor:  </td></div>
     <div class="col-lg-6 col-md-6 col-xs-6"><td class="tg-0lax" id="content-data2"><?php print $node->field_valor['und'][0]['value'];?></td></div>
  </tr>

    <tr>
    <div class="col-lg-6  col-md-6 col-xs-6"><td class="tg-0lax" id="label2">Tiempo de ejecución: </td></div>
     <div class="col-lg-6 col-md-6 col-xs-6"><td class="tg-0lax" id="content-data2">Meses: <?php print $node->field_tiempo_de_ejecucion[und][0]['taxonomy_term']->name;?><br>
      Días:<?php print $node->field_tiempo_de_ejecucion_x_dia2['und'][0]['value'];?></td></div>
  </tr>
    <tr>
    <div class="col-lg-6  col-md-6 col-xs-6"><td class="tg-0lax" id="label2">Tipo de contratación:</td></div>
     <div class="col-lg-6 col-md-6 col-xs-6"><td class="tg-0lax" id="content-data2"><?php print $node->field_tipo_de_contratacion[und][0]['taxonomy_term']->name;?></td></div>
  </tr>
    <tr>
    <div class="col-lg-6  col-md-6 col-xs-6"><td class="tg-0lax" id="label2">Fecha de inicio:</td></div>
     <div class="col-lg-6 col-md-6 col-xs-6"><td class="tg-0lax" id="content-data2"><?php print date('m.d.Y', $node->field_fecha_de_inicio['und'][0]['value']); ?></td></div>
  </tr>
    <tr>
    <div class="col-lg-6  col-md-6 col-xs-6"><td class="tg-0lax" id="label2">Fecha de finalización:</td></div>
     <div class="col-lg-6 col-md-6 col-xs-6"><td class="tg-0lax" id="content-data2"><?php print date('m.d.Y', $node->field_fecha_de_finalizacion['und'][0]['value']); ?></td></div>
  </tr>
    <tr>
   
    <div class="col-lg-6  col-md-6 col-xs-6"><td class="tg-0lax" id="label2">Tipo de fondo:</td></div>
     <div class="col-lg-6 col-md-6 col-xs-6"><td class="tg-0lax" id="content-data2"><?php print $node->field_tipo_de_fondo[und][0]['taxonomy_term']->name;?></td></div>
  </tr>
    <tr>
    <div class="col-lg-6  col-md-6 col-xs-6"><td class="tg-0lax" id="label2">Municipios en el contrato:</td></div>
     <div class="col-lg-6 col-md-6 col-xs-6"><td class="tg-0lax" id="content-data2">
      <?php print render($content['field_municipios']);;?></td></div>
  </tr>
    <tr>
    <div class="col-lg-6  col-md-6 col-xs-6"><td class="tg-0lax" id="label2">Contratistas:</td></div>
     <div class="col-lg-6 col-md-6 col-xs-6"><td class="tg-0lax" id="content-data2"><?php print render($content['field_contratistas_en_el_contrat']);;?></td></div>
  </tr>
    <tr>
    <div class="col-lg-6  col-md-6 col-xs-6"><td class="tg-0lax" id="label2">Entidad interventora:</td></div>
     <div class="col-lg-6 col-md-6 col-xs-6"><td class="tg-0lax" id="content-data2"> <?php print render($content['field_entidad_encargada_de_inte2']);;?></td></div>
  </tr>
    <tr>
    <div class="col-lg-6  col-md-6 col-xs-6"><td class="tg-0lax" id="label2">Entidad contratante:</td></div>
     <div class="col-lg-6 col-md-6 col-xs-6"><td class="tg-0lax" id="content-data2"><?php print render($content['field_entidad_contratante_2']);;?></td></div>
  </tr>
    <tr>
    <div class="col-lg-6  col-md-6 col-xs-6"><td class="tg-0lax" id="label2">Número de proceso:</td></div>
     <div class="col-lg-6 col-md-6 col-xs-6"><td class="tg-0lax" id="content-data2"><?php print $node->field_numero_de_proceso['und'][0]['value'];?></td></div>
  </tr> 
    <tr>
    <div class="col-lg-6  col-md-6 col-xs-6"><td class="tg-0lax" id="label2">Fuente del contrato:</td></div>
     <div class="col-lg-6 col-md-6 col-xs-6"><td class="tg-0lax" id="content-data2"><?php print $node->field_fuente_de_contrato_2['und'][0]['value'];?></td></div> 
  </tr>
</table>
<hr>
  <h2>Contratos principales asociados</h2>
<div id="content-data2" style="text-align: left;"><?php print render($content['field_contrato_principal_asociad']);;?></div>

<br>

</div>
</div>
  <footer class="container-fluid pie-pagina">   
    <div class="container pie1">
      <div class="marcas">
        <div class="col-lg-3 col-md-3-">
        <a href="http://rutasdelconflicto.com/" target="_blank"><img src="http://lapazenelterreno.com/sites/all/themes/conflicto/img/footer/rutas.png" width="100px"></a>
      </div>
      <div class="col-lg-3 col-md-3-">
        <a href="https://consejoderedaccion.org" target="_blank"><img src="http://rutasdelconflicto.com/dineros-posconflicto/cdrhorizontal-blanco.png" width="140px"></a>
      </div>
      <div class="col-lg-3 col-md-3-">
         <a href="https://www.opensocietyfoundations.org/" target="_blank"><img src="http://rutasdelconflicto.com/especiales/acuatenientes/img/logo-open.png" width="145px"></a>
       </div>
      </div>
 
    </div> 
    <div class="container"><hr>
      <div class="col-lg-6 menufooter"><ul><a href="http://rutasdelconflicto.com/dineros-posconflicto/node/749"><li>Quiénes Somos</li></a><a href="http://rutasdelconflicto.com/dineros-posconflicto/avanzada"><li>Búsqueda Avanzada</li></a></ul>
      </div> 
      </div>

</footer>
</article>	