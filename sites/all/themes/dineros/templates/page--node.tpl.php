
<?php
$url = drupal_get_path('theme', 'dineros');
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

