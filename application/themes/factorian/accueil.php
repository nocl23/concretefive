<?php $view->inc('elements/header.php');?>

<div class="large">
  <div class="section">
    <?php
      $a = new Area('Diaporama');
      $a->display($c);
    ?>
  </div>
</div><!-- fin section large -->

<div class="container second-section">

    <div class="col-md-4">
      <?php
        $a = new Area('Col1');
        $a->display($c);
      ?>
    </div>
    <div class="col-md-4">
      <?php
        $a = new Area('Col2');
        $a->display($c);
      ?>
    </div>

    <div class="col-md-4">
        <?php
          $a = new Area('Col3');
          $a->display($c);
        ?>
    </div>
</div>


<div class="large section-contact-us">
    <div class="container">
      <?php
        $a = new Area('CTA');
        $a->display($c);
      ?>
    </div>
</div><!--Fin large build your dream + button -->

<div class="container section-bottom">
  <?php
    $a = new Area('Contenu');
    $a->enableGridContainer();
    $a->display($c);
  ?>
</div>


<?php $view->inc('elements/footer.php');?>
