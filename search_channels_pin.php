
<?php 
include "head.php";


?>


    <div class="container-fluid">
        <div class="row">
            <?php include "side.php"; ?>
            <div class="col-xs-6 col-sm-6 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Search By pin number for channel info</h1>


<!--                <ul class="list-group">


                    <li class="list-group-item" style="text-align:center">
                        <span class="label label-warning"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Notification !!</span>
                        <div class="alert alert-warning" role="alert" style="text-align: center;"><span aria-hidden="true" class="glyphicon glyphicon-wrench"></span> Still Under Development, We'll keep you informed Soon <span aria-hidden="true" class="glyphicon glyphicon-hourglass"></span></div>
                    </li>
                </ul>-->

                <div class=" panel-info panel" style="padding-left: 0px; padding-right: 0px;">
                  <div class="widget-header widget-header-blue widget-header-flat">
                      <h4 class="widget-title">   Search for connector pin numbers:</h4>
                  </div>
                  <div class="panel-body">

                      <div class="row">
                          
                          <form method="POST" action="search_channels_pin.php">
                              <div class="form-group">
                                    <label >Search by:</label>
                                    <input name="searchby" value="" hidden>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Choose Search by
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a class="searchbysdv" href="#"> SECTOR - DEPTH - VFAT_POSN </a></li>
                                            <li><a class="searchbyepd" href="#"> IETA - IPHI - DEPTH </a></li>
                                        </ul>
                                    </div>
                              </div> 
                              <div class="form-group" class="sdv" >
                                  <label >Sector:</label>
                                  <input name="sector" value="" hidden>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Choose Search by
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            
                                        </ul>
                                    </div>
                                  <input class="sectorinput" name="sector" value="" hidden><br>
                                                        <!--multiple=""-->
                                                        <select tabindex="-1"  class="chosen-select-sector" style="" data-placeholder="Choose Sector">
                                                            <option value=""></option>
                                                            <optgroup label="sectors ">
                                                                    <?= getSectors(); ?>
                                                            </optgroup>
                                                        </select>
                                    
                                  <br/>
                                  <div style="white-space:nowrap">
                                  <label class="sublabel" >Depth:</label>
                                  <input value="" name="sector">
                                  </div>
                                  <br/>
                                  <div style="white-space:nowrap">
                                  <label class="sublabel" >VFAT position:</label>
                                  <input value="" name="sector">
                                  </div>
                              </div>
                              <div class="form-group" class="epd">
                                  <div style="white-space:nowrap">
                                  <label class="sublabel" >IETA:</label>
                                  <input value="" name="sector">
                                  </div>
                                  <br/>
                                  <div style="white-space:nowrap">
                                  <label class="sublabel" >IPHI:</label>
                                  <input value="" name="sector">
                                  </div>
                                  <br/>
                                  <div style="white-space:nowrap">
                                  <label class="sublabel" >Depth:</label>
                                  <input value="" name="sector">
                                  </div>
                              </div>
                                    
                                <button type="submit" class="btn btn-default btn-lg subbutt_gen">Submit</button>
                          </form>
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
$("#map").attr("class","active");
</script>