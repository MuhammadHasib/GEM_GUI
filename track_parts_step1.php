
<?php 
include "head.php";


?>


    <div class="container-fluid">
      <div class="row">
        
<?php  include "side.php"; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Component Tracking </h1>

          <a href="track_parts.php" class="btn btn-default btn-app radius-4">
                <img height="42" src="images/foil2.png">
                <br>
                Add Tracking info
                <span class="badge badge-success"><i class="ace-icon glyphicon glyphicon-plus"></i></span>
            </a>
            
          <a class="btn btn-default btn-app radius-4" href="list_tracking_info.php">
                <i class="ace-icon glyphicon glyphicon-book"></i>
                List Tracking info
                <span class="badge badge-success"><i class="ace-icon glyphicon glyphicon-plus"></i></span>
            </a>
          
        </div>
      </div>
    </div>



  <?php 
include "foot.php";

?>
