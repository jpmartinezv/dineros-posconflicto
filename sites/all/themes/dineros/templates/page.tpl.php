
<?php
$url = drupal_get_path('theme', 'dineros');
$tema_ruta = drupal_get_path('theme', 'dineros');

$path = current_path();
if ($path == 'home') {
  $path = '';
}
?>


<nav class="navbar navbar-default" id="header">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php print url('<front>'); ?>">LOS NÚMEROS DEL POSCONFLICTO</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php print url('node/749'); ?>">¿Quiénes somos?</a></li>
          <li><a href="<?php print url('node/754'); ?>">Historias</a></li>
           <li><a href="<?php print url('avanzada'); ?>">Búsqueda avanzada</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



       <?php print render($page['content']); ?>

  <footer class="container-fluid pie-pagina">   
    <div class="container pie1">
      <div class="marcas">
        <div class="col-lg-3 col-md-3-">
        <a href="http://rutasdelconflicto.com/" target="_blank"><img src="http://lapazenelterreno.com/sites/all/themes/conflicto/img/footer/rutas.png" width="100px"></a>
      </div>
      <div class="col-lg-3 col-md-3-">
        <a href="https://consejoderedaccion.org" target="_blank"><img src="cdrhorizontal-blanco.png" width="140px"></a>
      </div>
      <div class="col-lg-3 col-md-3-">
         <a href="https://www.opensocietyfoundations.org/" target="_blank"><img src="http://rutasdelconflicto.com/especiales/acuatenientes/img/logo-open.png" width="145px"></a>
       </div>
  <div class="col-lg-3 col-md-3-">
         <a href="https://www.opensocietyfoundations.org/" target="_blank"><img src="       http://rutasdelconflicto.com/especiales/acuatenientes/img/verdad1.png" width="190px"></a>
       </div>

      </div>
 
    </div> 
    <div class="container"><hr>
      <div class="col-lg-6 menufooter"><ul><a href="<?php print url('node/749'); ?>"><li>Quiénes Somos</li></a><a href="<?php print url('avanzada'); ?>"><li>Búsqueda Avanzada</li></a></ul>
      </div> 
      </div>

</footer>