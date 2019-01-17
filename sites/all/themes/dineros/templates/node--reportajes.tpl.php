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
    ->propertyCondition('type', array('reportajes'));
?>


<article id="node-<?php print $node->nid?>" class="node-blog">
<div class="header-banner"> <div class="top-left"></div>
  <div class="container" id="texto-banner" style="background-color:rgb(2,2,2,0.5); width:fit-content;">
<H1>HISTORIAS</H1></div><div class="bottom-right"></div>
</div>
<div  class="container-fluid" id="contenido-interno-reportaje">
  <div class="container">
  <div class="nombre-contrato" style="text-transform: uppercase;">
<h1><?php print $node->title; ?></h1>
  </div>
</div>
 <div class="container" id="texto-largo"> <?php print render($content['body']); ?></div>


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
      <div class="col-lg-6 menufooter"><ul><a href="<?php print url('node/749'); ?>"><li>Quiénes Somos</li></a><a href="<?php print url('avanzada'); ?>"><li>Búsqueda Avanzada</li></a></ul>
      </div> 
      </div>

</footer>
</article>	