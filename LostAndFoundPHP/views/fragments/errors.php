
<?php  if (isset($_SESSION['errors']) > 0) : ?>
  <div class="error">
    <?php
      var_dump($_SESSION['errors']);
    ?>
  	<?php foreach ($_SESSION['errors'] as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
  <?php unset($_SESSION['errors']);?>
<?php  endif ?>