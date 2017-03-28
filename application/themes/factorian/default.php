<!DOCTYPE html>
<html>
  <head>
    <?php $view->inc('elements/header.php');?>
  </head>
  <body>
    <div class="container">
      <?php
        $a = new Area('Contenu');
        $a->display($c);
       ?>
    </div>
    <?php $view->inc('elements/footer.php');?>
  </body>
</html>
