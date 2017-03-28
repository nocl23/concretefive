<!DOCTYPE html>
<html>
  <head>
    <?php Loader::element('header_required'); ?>
  </head>
  <body>
    <?php
      $a = new Area('Contenu');
      $a->display($c);
     ?>
    <?php Loader::element('footer_required'); ?>
  </body>
</html>
