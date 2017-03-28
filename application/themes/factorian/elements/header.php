<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Factorian Bootstrap</title>
    <link rel ="stylesheet" href="<?php echo $view->getThemePath();?>/bootstrap/css/bootstrap.min.css">
    <link rel ="stylesheet" href="<?php echo $view->getThemePath();?>/style.css">
    <?php Loader::element('header_required'); ?>
  </head>
  <body>
      <div class="container haut">
        <div class="col-md-3">
            <img id="image_menu" src="<?php echo $view->getThemePath();?>/logo.png" alt="image menu">
        </div>
        <div class="col-md-offset-3 col-md-6 nav">
          <?php
          $a = new GlobalArea('Menu');
          $a->display($c);
          ?>
        </div>
      </div><!-- /.container -->
