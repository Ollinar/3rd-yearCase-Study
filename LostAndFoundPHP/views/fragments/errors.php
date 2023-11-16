
<?php  if (isset($_SESSION['errors'])) : ?>
  <div class="error">
    <?=$_SESSION['errors'] ?>
  </div>
  <?php unset($_SESSION['errors']);?>
<?php  endif ?>