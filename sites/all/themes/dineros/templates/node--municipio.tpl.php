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
    ->propertyCondition('type', array('municipio'));
$total = $query->count()->execute();

$ubicacion = taxonomy_get_parents_all($node->field_municipio_contratro['und'][0]['tid']);
?>


<article id="node-<?php print $node->nid?>" class="node-blog">

<div  class="container-fluid" id="contenido-interno">
  
  <div class="container">
        <div class="col-lg-4 col-md-4 col-xs-12 seccionador-destacados" style="width:fit-content;margin-bottom: 1em;">
            <div class="seccionador-destacados-texto">
            <h2>MUNICIPIO</h2>
            </div>
        </div>
        </div>

  <div class="container ficha-contrato">
  <div class="nombre-contrato">
<h1><?php print $node->title; ?>, <?php print $node->field_departamento['und'][0]['value'];?></h1>
  </div>
  

    <div class="col-lg-6 col-md-6 col-xs-12">

<div class="row">
    <div class="col-lg-6  col-md-6 col-xs-6" id="label2"> Municipio priorizado</div>
     <div class="col-lg-6 col-md-6 col-xs-6" id="content-data2"><?php print $node->field_municipio_priorizado[und][0]['taxonomy_term']->name;?></div>
</div>
<div class="row">
    <div class="col-lg-6  col-md-6 col-xs-6" id="label2"> Superficie</div>
     <div class="col-lg-6 col-md-6 col-xs-6" id="content-data2"><?php print $node->field_superficie['und'][0]['value'];?> Kilometros</div> 
</div>
<div class="row">
    <div class="col-lg-6  col-md-6 col-xs-6" id="label2">Población</div>
     <div class="col-lg-6 col-md-6 col-xs-6" id="content-data2"><?php print $node->field_numero_total_de_personas['und'][0]['value'];?> Personas</div> 
</div>
<div class="row">
    <div class="col-lg-6  col-md-6 col-xs-6" id="label2">Población étnica</div>
     <div class="col-lg-6 col-md-6 col-xs-6" id="content-data2"><?php print $node->field_indigenas['und'][0]['value'];?>%</div> 
</div>
<div class="row">
    <div class="col-lg-6  col-md-6 col-xs-6" id="label2"> Servicios básicos</div>
     <div class="col-lg-6 col-md-6 col-xs-6" id="content-data2"><span><small>Agua</small> <?php print $node->field_servicios_b_sicos_agua[und][0]['taxonomy_term']->name;?> %</span><br>
      <span><small>Electricidad</small> <?php print $node->field_servicios_b_sicos_electric[und][0]['taxonomy_term']->name;?> %</span><br>
      <span><small>Alcantarillado</small> <?php print $node->field_servicios_b_sicos_alcantar[und][0]['taxonomy_term']->name;?> %</span></div>
</div>
<div class="row">
    <div class="col-lg-6  col-md-6 col-xs-6" id="label2">Nivel del municipio</div>
     <div class="col-lg-6 col-md-6 col-xs-6" id="content-data2"><?php print $node->field_nivel_de_municipio['und'][0]['value'];?></div>  
</div>
<div class="row">
    <div class="col-lg-12  col-md-12 col-xs-12" id="contratos-municipio">Contratos relacionados al municipio</div>
     <div class="col-lg-12 col-md-12 col-xs-12" id="lista-contratos-municipio" ><?php print render($content['field_contratos_por_municipios']);;?></div>  
</div>
<br>  

</div>

  <div class="col-lg-6 col-md-6 col-xs-12">
<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php print $node->field_coordenadas['und'][0]['lat']; ?>,<?php print $node->field_coordenadas['und'][0]['lon']; ?>&amp;hl=es;&amp;output=embed&z=7"></iframe>
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