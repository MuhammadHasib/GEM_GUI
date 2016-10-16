
<?php 
include "head.php";


?>


    <div class="container-fluid">
      <div class="row">
        
<?php  include "side.php"; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Form Submitted </h2>

<?php 
 
if(isset($_SESSION['post_return']) && isset($_SESSION['new_chamber_ntfy'])){
    
    $session = $_SESSION['post_return'];
    $ntfn = $_SESSION['new_chamber_ntfy'];
    
    echo $ntfn;
    
    if($session['statuscode'] == "200"){
        echo '</br><span class="label label-success"> <b>Status code:</b>'.$session['statuscode'].'</span> ';
        echo '<hr><div class="alert alert-success" role="alert"><b>Execution return:</b>'.$session['return'].'</div>'; 
    }
    else if($session['statuscode'] == "503"){
        echo '</br><span class="label label-danger"> <b>Status code:</b>'.$session['statuscode'].'</span> ';
        echo '<hr><div class="alert alert-danger" role="alert"><b>Execution return:</b>'.$session['return'].'</div>';
    }
    else{
        echo '</br><span class="label label-warning"> <b>Status code:</b>'.$session['statuscode'].'</span> ';
        echo '<hr><div class="alert alert-warning" role="alert"><b>Execution return:</b>'.$session['return'].'</div>';
    }
}

?>

        </div>
      </div>
    </div>



  <?php 
include "foot.php";

?>
