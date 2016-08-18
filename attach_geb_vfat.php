
<?php 
include "head.php";


?>


    <div class="container-fluid">
      <div class="row">
        
<?php  include "side.php"; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Attach VFATs to GEB</h1>
          <img src="images/GEB-VFAT.png" width="20%" style="margin-bottom: 10px; border-radius: 20px;">

      <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     var_dump($_POST);
                if ((isset($_POST['version']) && isset($_POST['gebl']) && isset($_POST['opto']) ) || (isset($_POST['version']) && isset($_POST['gebs']) && isset($_POST['gebs']))) {
                    $temp = array();
                    $arr = array();
                    $childs = array();
                        $child = array();
                        $subchild = array();
                    if ($_POST['version'] == "L") {
                        echo '<div role="alert" class="alert alert-success">
      <strong>Well done!</strong> You successfully attached OptoHybrid [' . $_POST['opto'] . '] to GEB [' . $_POST['gebl'] . ']   </div>';
                        $temp[$SERIAL_NUMBER] = $_POST['gebl'];
                        $temp[$KIND_OF_PART] = $GEB_KIND_OF_PART_NAME;
                        
                        $child['SERIAL_NUMBER'] = $_POST['opto'];
                        $child['KIND_OF_PART'] = $OPTOHYBRID_KIND_OF_PART_NAME;
                        $childs[] = $child;
                    }
                    if ($_POST['version'] == "S") {
                        echo '<div role="alert" class="alert alert-success">
      <strong>Well done!</strong> You successfully attached OptoHybrid [' . $_POST['opto'] . '] to GEB [' . $_POST['gebs'] . ']   </div>';
                    
                        $temp[$SERIAL_NUMBER] = $_POST['gebs'];
                        $temp[$KIND_OF_PART] = $GEB_KIND_OF_PART_NAME;
                        
                        $child['SERIAL_NUMBER'] = $_POST['opto'];
                        $child['KIND_OF_PART'] = $OPTOHYBRID_KIND_OF_PART_NAME;
                        $childs[] = $child;
                    }
                    $temp['children'] = $childs;
                    $arr[] = $temp;
                    print_r($arr);
                    
                     generateXml($arr);
                }
            } else {

                echo '<div style="display: none" geble="alert" class="alert alert-danger ">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><strong>Error!</strong> Please fill the required fields.
    </div>';
                ?> 

          <form method="POST" action="attach_geb_opto.php">
                    <div class="row">
                        <div class="col-xs-6 panel-info panel" style="padding-left: 0px; padding-right: 0px;">
                            <div class="panel-heading">
                                <h3 class="panel-title" >  <span aria-hidden="true" class="glyphicon glyphicon-info-sign"></span>Attached parts information</h3>
                            </div>
                            <div class="panel-body">
                                <label for="exampleInputFile" >(1) Choose Version L/S ?</label>
                                <input class="version" name="version" value="" hidden>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Choose Version
                                        <span class="caret"></span>
                                    </button> 
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Long</a></li>
                                        <li><a href="#">Short</a></li>
                                    </ul>
                                </div>


                                <label for="exampleInputFile" > (2)Pick a GEB (Parent of OptoHybrid) </label>

                                <!-- GEB S-->
                                <div class="form-group shortreads" style="display: none">
                                    <input class="gebs" name="gebs"  hidden>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Choose Readout GEB
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <?php get_available_parts_nochild($GEB_KIND_OF_PART_ID, "-S-"); ?>
                                        </ul>

                                    </div>
                                </div>

                                <!-- GEB L-->
                                <div class="form-group longreads" >
                                    <input class="gebl" name="gebl"  hidden>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Choose Readout GEB
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <?php get_available_parts_nochild($GEB_KIND_OF_PART_ID, "-L-"); ?>
                                        </ul>

                                    </div>
                                </div>

                                <!-- VFATS -->
                                <div class="form-group">
                                    <label for="exampleInputFile"> (3) Pick a OptoHybrid (Child of GEB)</label>
                                                  <!-- ***** VFAT layout begin ******* -->
                                    <div style="border: #000;  text-center">
                                        <!-- 1st Row-->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="cliente"> (1,1)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                 
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (1,2)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                   
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (1,3)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                    
                                            </div>
                                        </div>
                                        <!-- 2nd Row -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="cliente"> (2,1)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                 
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (2,2)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                   
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (2,3)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                    
                                            </div>
                                        </div>
                                        <!-- 3rd Row -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="cliente"> (3,1)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                 
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (3,2)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                   
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (3,3)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                    
                                            </div>
                                        </div>
                                        <!-- 4th Row -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="cliente"> (4,1)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                 
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (4,2)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                   
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (4,3)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                    
                                            </div>
                                        </div>
                                        <!-- 5th Row -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="cliente"> (5,1)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                 
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (5,2)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                   
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (5,3)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                    
                                            </div>
                                        </div>
                                        <!-- 6th Row -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="cliente"> (6,1)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                 
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (6,2)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                   
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (6,3)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                    
                                            </div>
                                        </div>
                                        <!-- 7th Row -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="cliente"> (7,1)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                 
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (7,2)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                   
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (7,3)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                    
                                            </div>
                                        </div>
                                        <!-- 8th Row -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="cliente"> (8,1)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                 
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (8,2)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                   
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cliente"> (8,3)
                                                    <div class="dropdown" style="width: auto;">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Choose VFAT
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0001</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0002</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0003</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0004</a></li>
                                                            <li><a class="PCB-GEB" href="#"> VFAT-VI-2-CERN-0005</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                                    
                                            </div>
                                        </div>
                                </div>
                                <!-- ******** VFAT layout END********* -->


                                </div>
                                

                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default btn-lg subbutt_at">Submit</button> 
                </form>
<?php } ?>

        </div>
    </div>
</div>
<?php
include "foot.htm";
?>
<script>
    /**
     * [4] When selecting Long or Short version , run Ajax get latest ID Short or Long.
     */
    $('.dropdown-menu a').on('click', function () {

        if ($(this).html() == "Long") {

            $(".longreads,.longgebs").show();
            $(".shortreads,.shortgebs").hide();
            $(".gebs,.gebl").val("");

        }

        if ($(this).html() == "Short") {

            $(".shortreads,.shortgebs").show();
            $(".chosen-select").chosen();
            $(".longreads,.longgebs").hide();
            $(".gebl,.gebs").val("");

        }




    })


$('.chosen-select-opto').on('change', function (evt, params) {
        $('.opto').val($(this).chosen().val());
        alert($(this).chosen().val());
        alert($(".opto").val().length);
    });


    $('.chosen-select-gebl').on('change', function (evt, params) {
        $('.gebl').val($(this).chosen().val());
        alert($(this).chosen().val());
    });

    $('.chosen-select-gebs').on('change', function (evt, params) {
        $('.gebs').val($(this).chosen().val());
        alert($(this).chosen().val());
    });


    $(".subbutt_at").click(function () {
        if ($(".version").html().length == 0) {
            $('.alert-danger').show();
            return false;
        }
        if (($(".gebs").val().length == 0 && $(".gebl").val().length == 0) || ($(".opto").val().length == 0 ))
        {
            $('.alert-danger').show();
            return false;
        }
    })
//    alert($(".version").val().length);
//    alert($(".gebs").val().length);alert($(".opto").val().length);alert($(".gebl").val().length );alert($(".gebs").val().length);
</script>
