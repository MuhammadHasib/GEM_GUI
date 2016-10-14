
<?php 
include "head.php";


?>


    <div class="container-fluid">
      <div class="row">
        
<?php  include "side.php"; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Successfully Submitted </h1>

<?php 
    print_r(unserialize($_SESSION['post_return']));
//    print_r($_GET['statusCode']);
//    print_r($_GET['return']);
 
//    if($_GET['statusCode'] == "200"){
//        echo '</br><span class="label label-success"> <b>Status code:</b>'.$_GET['statusCode'].'</span> ';
//        echo '<hr><div class="alert alert-success" role="alert"><b>Execution return:</b>'.$_GET['return'].'</div>'; 
//    }
//    else if($_GET['statusCode'] == "503"){
//        echo '</br><span class="label label-danger"> <b>Status code:</b>'.$_GET['statusCode'].'</span> ';
//        echo '<hr><div class="alert alert-danger" role="alert"><b>Execution return:</b>'.$_GET['return'].'</div>';
//    }
//    else{
//        echo '</br><span class="label label-warning"> <b>Status code:</b>'.$_GET['statusCode'].'</span> ';
//        echo '<hr><div class="alert alert-warning" role="alert"><b>Execution return:</b>'.$_GET['return'].'</div>';
//    }
?>

        </div>
      </div>
    </div>



  <?php 
include "foot.php";

?>
