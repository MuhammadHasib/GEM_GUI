
<?php 
include "head.php";


?>


    <div class="container-fluid">
      <div class="row">
        
<?php  include "side.php"; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Successfully Submitted </h1>

<?php 
print_r($_SESSION);
 print_r($_SESSION['post_return']);
?>

        </div>
      </div>
    </div>



  <?php 
include "foot.php";

?>
