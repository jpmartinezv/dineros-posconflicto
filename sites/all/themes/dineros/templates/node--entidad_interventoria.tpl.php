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
    ->propertyCondition('type', array('entidad_interventoria'));
$total = $query->count()->execute();

$ubicacion = taxonomy_get_parents_all($node->field_municipio_contratro['und'][0]['tid']);
?>


<article id="node-<?php print $node->nid?>" class="node-blog">

<div  class="container-fluid" id="contenido-interno">
  
  <div class="container">
        <div class="col-lg-4 col-md-4 col-xs-12 seccionador-destacados" style="width:fit-content;margin-bottom: 1em;">
            <div class="seccionador-destacados-texto">
            <h2>ENTIDAD INTERVENTORA</h2>
            </div>
        </div>
        </div>

  <div class="container ficha-contrato">
  <div class="nombre-contrato">
<h1> <?php print $node->title; ?></h1>
  </div>
    <div class="col-lg-12 col-md-12 col-xs-12">
            <table class="tg">
  <tr>
    <div class="col-lg-6  col-md-6 col-xs-6"><td class="tg-0lax" id="label2">Contratos relacionados a interventora:  </td></div>
     <div class="col-lg-6 col-md-6 col-xs-6"><td class="tg-0lax" id="content-data2"><?php print render($content['field_contratos_relacionado_inte']);;?></td></div>   
  </tr>

</table>

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