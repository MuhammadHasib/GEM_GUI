
<?php
include "head.php";
?>


<div class="container-fluid">
    <div class="row">

        <?php include "side.php"; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Attach GEB to Readout</h1>
            <img src="images/READOUT-GEB.png" width="10%" style="margin-bottom: 10px; border-radius: 20px;">

            <form method="POST" action="attach_readout_geb.php">
                <div class="row">
                    <div class="col-xs-6 panel-info panel" style="padding-left: 0px; padding-right: 0px;">
                        <div class="panel-heading">
                            <h3 class="panel-title" >  <span aria-hidden="true" class="glyphicon glyphicon-info-sign"></span>Attached parts information</h3>
                        </div>
                        <div class="panel-body">
                            <label for="exampleInputFile" >Version</label>
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

                            
                                <label for="exampleInputFile" >Readout where GEB will be mounted</label>
                                
                                <!-- Readout S-->
                                <div class="form-group shortreads" style="display: none">
                                    <input class="ros" name="ros"  hidden>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Choose Readout PCB
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <?php get_available_parts($READOUT_KIND_OF_PART_ID, "-S-"); ?>
                                        </ul>

                                    </div>
                                </div>

                                <!-- Readout L-->
                                <div class="form-group longreads" >
                                    <input class="rol" name="rol"  hidden>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Choose Readout PCB
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <?php get_available_parts($READOUT_KIND_OF_PART_ID, "-L-"); ?>
                                        </ul>

                                    </div>
                                </div>
                            
                            <!--Long GEBs-->
                            <div class="form-group longgebs">
                                    <label for="exampleInputFile">GEB(s)</label>
                                    <input class="gebl" name="gebl" value="" hidden><br>
                                    <!--multiple=""-->
                                    <select tabindex="-1"  class="chosen-select" style="width: 350px; " data-placeholder="Choose Long GEB ">
                                        <option value=""></option>
                                        <optgroup label="Long">
                                            <?php $arr= get_available_parts_nohtml($GEB_KIND_OF_PART_ID, "-L-"); 
                                                foreach ($arr as $value) {
                                                        echo "<option>".$value['SERIAL_NUMBER']."</option>";
                                                    }
                                            ?>
                                            
                                        </optgroup>
                                       
                                    </select>


                                </div>
                             <div class="form-group shortgebs" style="display: none">
                                    <label for="exampleInputFile">GEB(s)</label>
                                    <input class="gebs" name="gebl" value="" hidden><br>
                                    <!--multiple=""-->
                                    <select tabindex="-1"  class="chosen-select" style="width: 350px; " data-placeholder="Choose Short GEB ">
                                        <option value=""></option>
                                        <optgroup label="Short">
                                            <?php $arr= get_available_parts_nohtml($GEB_KIND_OF_PART_ID, "-S-"); 
                                                foreach ($arr as $value) {
                                                        echo "<option>".$value['SERIAL_NUMBER']."</option>";
                                                    }
                                            ?>
                                            
                                        </optgroup>
                                       
                                    </select>


                                </div>
                            
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-default btn-lg subbutt_ch">Submit</button> 
            </form>


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
            $(".ros,.gebs").val("");

        }

        if ($(this).html() == "Short") {

            $(".shortreads,.shortgebs").show();
            $(".longreads,.longgebs").hide();
            $(".rol,.gebl").val("");

        }


    })
</script>
