
<?php
include "head.php";
?>


<div class="container-fluid">
    <div class="row">
<?php include "side.php"; ?>
<!--        <div class="col-xs-6 col-sm-6 col-sm-offset-3 col-md-10 col-md-offset-2 main">-->
        <div class="col-xs-6 col-sm-6 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            
            <h1 class="page-header">Quality control list</h1>


            

                <!--
                <ul class="list-group">
                <li class="list-group-item"><div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Visual Inspection</h3>
                </div>
                <div class="panel-body">
                  <a href="new_qc_inspxn.php"><button type="button" class="btn btn-success"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Report Visual inspection </button></a>
                </div>
              </div></li>-->

                <!--            <li class="list-group-item"><div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">IV Characteristics</h3>
                            </div>
                            <div class="panel-body">
                             <a href="new_qc_iv.php"><button type="button" class="btn btn-success"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add new IV Characteristics</button></a>
                            </div>
                          </div></li>-->
                <!--<li class="list-group-item" style="text-align:center">
                        <span class="label label-warning"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Notification !!</span>
                          <div class="alert alert-warning" role="alert" style="text-align: center;"><span aria-hidden="true" class="glyphicon glyphicon-wrench"></span> Still Under Development, We'll keep you informed Soon <span aria-hidden="true" class="glyphicon glyphicon-hourglass"></span></div>
                </li>
                </ul>
                -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-16">
                        <img  src="images/cosmicStand.png">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-36">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Cosmic Stand layout</h3>
                        </div>
                        <div class="panel-body">
                            
                            <a href="qc_cosmic_stand_layout.php"><button type="button" class="btn btn-success"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Setup</button></a>
                        </div>
                    </div>
                    </div>
                    
                </div>
                

            

        </div>

    </div>
</div>



<?php
include "foot.php";
?>
<script>
    $("#qc").attr("class", "active");
</script>