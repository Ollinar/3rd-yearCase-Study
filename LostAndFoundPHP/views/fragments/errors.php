
<?php  if (isset($error)) : ?>
  <div class="error mb-4">
    <?=$error?>
  </div>
  <?php elseif(isset($successMes)) : ?>
  <div class="success mb-4">
    <?=$successMes?>
  </div>
<?php  endif ?>