



<?php
if(isset($_SESSION['message'])){
    ?>
    <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>HEY</strong> <?=$_SESSION['message'];?>
  </div>
  <?
  unset($_SESSION['message']);
}
?>