<?php
if(isset($_SESSION['message'])){
     ?>
     <h4 ></h4> 
     <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> <?= $_SESSION['message'];  ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
     <?php
     unset( $_SESSION['message']);
}


?>