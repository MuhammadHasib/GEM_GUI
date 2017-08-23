<?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    include_once "functions/functions.php";
                    include_once "functions/generate_xml.php";
                    include_once "functions/globals.php";
                if (isset($_POST['serial'])) {
                    $temp =array();
                    $arr = array();
                    $temp[$SERIAL_NUMBER] = $_POST['serial'];
                    $temp[$NAME_LABEL] = $_POST['serial'];
                    if (isset($_POST['location']) && !empty($_POST['location'])) {
                        //echo $_POST['location'];
                        $temp[$LOCATION] = $_POST['location'];
                    }
                    if (isset($_POST['comment']) && !empty($_POST['comment'])) {
                        //echo $_POST['comment'];
                        $temp[$COMMENT_DESCRIPTION] = $_POST['comment'];
                    }
                    if (isset($_POST['barcode']) && !empty($_POST['barcode'])) {
                        //echo $_POST['barcode'];
                        $temp[$BARCODE] = $_POST['barcode'];
                    }
                    
                        $kindOfPart = $FRAME_KIND_OF_PART_NAME;
                        //echo  $kindOfPart;
                        $temp[$KIND_OF_PART] = $kindOfPart;
                    
                    
                    if (isset($logName)) {
                        //echo $logName;
                        $temp[$RECORD_INSERTION_USER] = $logName;
                    }
                  
                    if (isset($_POST['manufacturer']) && !empty($_POST['manufacturer'])) {
                        //echo $_POST['manufacturer'];
                        $temp[$MANUFACTURER] = $_POST['manufacturer'];
                    }
                    $arr[] = $temp;
                    
                    $res_arr = generateXml($arr);
                    
                    // Set session variables with the return 
                    session_start() ;
                    $_SESSION['post_return'] = $res_arr;
                    $_SESSION['new_chamber_ntfy'] = '<div role="alert" class="alert alert-success">
      <strong>Well done!</strong> You successfully created XML file for GEM External Frame <strong>ID:</strong> ' . $_POST['serial'] .
                    '</div>';
                    // redirect to confirm page
                    header('Location: https://gemdb.web.cern.ch/gemdb/confirmation.php'); //?msg='.$msg."&statusCode=".$statusCode."&return=".$return
                        die();
                }
            } else {
                ?>
<?php
include "head.php";
?>
<style>
    .scrollable-menu {
    height: auto;
    max-height: 200px;
    overflow-x: hidden;
}
    /* Flashing */
    .hover13 a:hover img {
        opacity: 1;
        -webkit-animation: flash 1.5s;
        animation: flash 1.5s;
        border: 1px inset;
    }
    @-webkit-keyframes flash {
        0% {
            opacity: .4;
        }
        100% {
            opacity: 1;
        }
    }
    @keyframes flash {
        0% {
            opacity: .4;
        }
        100% {
            opacity: 1;
        }
    }


    .rellists{
        display: none;
    }

    .rellists .dropdown{
        margin: 15px;
    }

</style>

<?php
//$serial_num_of_newest_part = get_part_ID($READOUT_KIND_OF_PART_ID);
//if ($serial_num_of_newest_part) {
//    $serial_num = explode('-', $serial_num_of_newest_part);
//} else {
//    $serial_num = array();
//    $serial_num[3] = "L";
//    $serial_num[4] = 0000;
//}
//echo $serial_num[3];
//echo $serial_num[4];
//echo "loacations"; print_r(get_locations());
//echo "<br>institutes"; print_r(get_institutes());
//echo "<br>Manufacturers";print_r(get_manufacturers());
?>
<div class="container-fluid" >
    <div class="row">

        <?php include "side.php"; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h2 class="sub-header"> <img src="images/ROPCB.png" width="4%"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New External Frame  </h2>

            <?php

                echo '<div style="display: none" role="alert" class="alert alert-danger ">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><strong>Error!</strong> Please fill the required fields.
    </div>';
                ?> 


                <form method="POST" action="new_frame.php">

                    <div class="row">
                        <div class="col-xs-6 panel-info panel" style="padding-left: 0px; padding-right: 0px;">
                            <div class="panel-heading">
                                <h3 class="panel-title" >  <span aria-hidden="true" class="glyphicon glyphicon-info-sign"></span>External Frame Information</h3>
                            </div>
                            <div class="panel-body">
                            <!-- <span class="text-muted">List single chambers</span> -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1" style="float: left;">Serial Number:&nbsp;</label>
                                    <!--<div class="serial"><span class="name">PCB-RO-VII-B<span class="batch">1</span>-</span><span id="vers" class="version" >VERSION</span><span class="id">-XXXX</span></div>-->
                                    <div class="serial"><span class="name">GE1/1-ExtFrame-B<span class="batch"></span>-</span><span id="vers" class="version" >VERSION</span><span class="id">-XXXX</span></div>
                                    <input class="serialInput" name="serial" value="" hidden>
                                </div>
                                <div class="form-group">
                                    &nbsp;<b style=" color: red">*</b>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Choose Version
                                            <span class="caret"></span>
                                        </button> 
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Long</a></li>
                                            <li><a href="#">Short</a></li>
                                        </ul>
                                    </div><br>
                                    <div class="dropdown" scrollable-menu>
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Choose Batch Number
                                            <span class="caret"></span>
                                        </button> 
                                        
					<ul class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenu1">
					    <li><a href="#" class="batchnum">1</a></li>
                                            <li><a href="#" class="batchnum">2</a></li>
                                            <li><a href="#" class="batchnum">3</a></li>
                                            <li><a href="#" class="batchnum">4</a></li>
                                            <li><a href="#" class="batchnum">5</a></li>
                                            <li><a href="#" class="batchnum">6</a></li>
                                            <li><a href="#" class="batchnum">7</a></li>
                                            <li><a href="#" class="batchnum">8</a></li>
                                            <li><a href="#" class="batchnum">9</a></li>
                                            <li><a href="#" class="batchnum">10</a></li>
                                            <li><a href="#" class="batchnum">11</a></li>
                                            <li><a href="#" class="batchnum">12</a></li>
                                            <li><a href="#" class="batchnum">13</a></li>
                                            <li><a href="#" class="batchnum">14</a></li>
                                            <li><a href="#" class="batchnum">15</a></li>
                                            <li><a href="#" class="batchnum">16</a></li>
                                            <li><a href="#" class="batchnum">17</a></li>
                                            <li><a href="#" class="batchnum">18</a></li>
                                            <li><a href="#" class="batchnum">19</a></li>
                                            <li><a href="#" class="batchnum">20</a></li>
                                            <li><a href="#" class="batchnum">21</a></li>
                                            <li><a href="#" class="batchnum">22</a></li>
                                            <li><a href="#" class="batchnum">23</a></li>
                                            <li><a href="#" class="batchnum">24</a></li>
                                            <li><a href="#" class="batchnum">25</a></li>
                                            <li><a href="#" class="batchnum">26</a></li>
                                            <li><a href="#" class="batchnum">27</a></li>
                                            <li><a href="#" class="batchnum">28</a></li>
                                            <li><a href="#" class="batchnum">29</a></li>
                                            <li><a href="#" class="batchnum">30</a></li>
                                            <li><a href="#" class="batchnum">31</a></li>
                                            <li><a href="#" class="batchnum">32</a></li>
                                            <li><a href="#" class="batchnum">33</a></li>
                                            <li><a href="#" class="batchnum">34</a></li>
                                            <li><a href="#" class="batchnum">35</a></li>
                                            <li><a href="#" class="batchnum">36</a></li>
                                            <li><a href="#" class="batchnum">37</a></li>
                                            <li><a href="#" class="batchnum">38</a></li>
                                            <li><a href="#" class="batchnum">39</a></li>
                                            <li><a href="#" class="batchnum">40</a></li>
                                            <li><a href="#" class="batchnum">41</a></li>
                                            <li><a href="#" class="batchnum">42</a></li>
                                            <li><a href="#" class="batchnum">43</a></li>
                                            <li><a href="#" class="batchnum">44</a></li>
                                            <li><a href="#" class="batchnum">45</a></li>
                                            <li><a href="#" class="batchnum">46</a></li>
                                            <li><a href="#" class="batchnum">47</a></li>
                                            <li><a href="#" class="batchnum">48</a></li>
                                            <li><a href="#" class="batchnum">49</a></li>
                                            <li><a href="#" class="batchnum">50</a></li>
                                        </ul>
                                    </div><br>
                                    <div class="dropdown">&nbsp;<b style=" color: red">*</b>
                                    <label> 4 digits Serial </label><br>
                                    <input placeholder="XXXX" class="serialValidation">
                                    <i class="ace-icon fa fa-times-circle alert-danger exist" style="display: none">Already in  Database</i>
                                    <i class="ace-icon fa fa-check-circle alert-success newId" style="display: none"> Valid Serial</i>
                                </div><br>
                                    <div class="form-group">
                                        <label> Barcode <i class="ace-icon glyphicon glyphicon-barcode"></i></label><br>
                                        <input name="barcode" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile" >Location</label>
                                        <input name="location" value="" hidden>
                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Choose Location
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <?php get_locations(); ?>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile" >Manufacturer</label>
                                        <input name="manufacturer" value="" hidden>
                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Choose Manufacturer
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <?php get_manufacturers(); ?>
                                            </ul>
                                        </div>

                                    </div>
                                    
                                </div>
                                <!--                                <div class="form-group">
                                                                    <label> Manufacturer name </label><br>
                                                                    <input name="manufacturer" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Manufacture date</label>
                                                                        <div class="controls input-append date form_datetime" data-date="2015-08-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                                                            <input size="16" type="text" value="2015-08-16T05:25:07" readonly>
                                                                            <span class="add-on glyphicon glyphicon-remove"><i class="icon-remove"></i></span>
                                                                            <span class="add-on glyphicon glyphicon-calendar"><i class="icon-th"></i></span>
                                                                        </div>
                                                                        <input type="hidden" id="dtp_input1" value="" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>  Status </label>
                                                                    <input name="driftId" value="" hidden>
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                            Choose Status
                                                                            <span class="caret"></span>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                                            <li><a class="status" href="#"> <span class="label label-success">Accepted</span></a></li>
                                                                            <li><a class="status" href="#"> <span class="label label-danger">Rejected</span></a></li>
                                                                            <li><a class="status" href="#"> <span class="label label-info">Repaired</span></a></li>
                                                                            <li><a class="status" href="#"> <span class="label label-primary">Installed</span></a></li>
                                                                            <li><a class="status" href="#"> <span class="label label-default">Under Test</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input class="testDiod" type="checkbox"> equipped with diodes?
                                                                            <input class="diodes" name="testDiod" value="" hidden>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                   
                                                                        <label> Add picture </label><br>
                                                                        <input class="testDiod" type="file">
                                                                    
                                                                </div>-->

                            </div>
                        </div>
                        <div class="col-xs-6 panel-info panel " style="padding-left: 0px; padding-right: 0px;">
                            <div class="panel-heading ">
                                <h3 class="panel-title" > <span aria-hidden="true" class="glyphicon glyphicon-comment"></span>Comments:</h3>
                            </div>
                            <div class="panel-body">

                                <div class="form-group">
                                    <label for="comment"> Leave your comment:</label>
                                    <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>









                    <button type="submit" class="btn btn-default subbutt">Submit</button>   



                </form>
            <?php } ?>



        </div>
    </div>
</div>

<?php
include "foot.php";
?>

<script>
    $(document).ready(function () {

        /**
         * [1] Ajax to refresh the Id once enter the page ( 1st time landing )
         */
        $.ajax({
            url: 'functions/ajaxActions.php?kindid=<?= $FRAME_KIND_OF_PART_ID; ?>',
            success: function () { /*alert('test');*/
            }
        });

        /**
         * [2] Ajax to refresh the Id every 10 seconds to check for updated ID
         * @returns {undefined}
         */
        //setInterval(ajaxCall, 7000); //7000 MS == 7s Seconds

        function ajaxCall() {
            if ($("#vers").text() == "L-") {
                $.ajax({
                    url: 'functions/ajaxActions.php?kindid=<?= $FRAME_KIND_OF_PART_ID; ?>&version=-L-',
                    success: function (data) {
                        $(".id").text(data);
                        $(".serialInput").val($(".serial").text());

                    }
                });

            }
            else if ($("#vers").text() == "S-") {
                $.ajax({
                    url: 'functions/ajaxActions.php?kindid=<?= $FRAME_KIND_OF_PART_ID; ?>&version=-S-',
                    success: function (data) {
                        $(".id").text(data);
                        $(".serialInput").val($(".serial").text());
                    }
                });

            }
            else {
                $.ajax({
                    url: 'functions/ajaxActions.php?kindid=<?= $FRAME_KIND_OF_PART_ID; ?>',
                    success: function () { /*alert('test');*/
                    }
                });
            }

        }


        /**
         * [3] Show  loader when user clickes submit button
         * @param {type} param1
         * @param {type} param2
         */
        $(".subbutt").on('click', function () {

            if ($(".serialInput").val() != "") {
                $('#preloader').fadeIn('fast');
            }
        });
    })

    /**
     * [4] When selecting Long or Short version , run Ajax get latest ID Short or Long.
     */
    $('.dropdown-menu a').on('click', function () {

        if ($(this).html() == "Long") {
            $('#preloader').fadeIn('fast', function () {});
            $("#vers").text("L");
            $(".serialInput").val($(".serial").text());
            validateInput($(".serial").text());
            $('#preloader').fadeOut('fast', function () {});
        }

        if ($(this).html() == "Short") {
            $('#preloader').fadeIn('fast', function () {});
            $("#vers").text("S");
            $(".serialInput").val($(".serial").text());
            validateInput($(".serial").text());
            $('#preloader').fadeOut('fast', function () {});
        }

        if ($(this).attr('class') == "batchnum") {
            $('#preloader').fadeIn('fast', function () {});
            $(".batch").text($(this).html());
            $(".serialInput").val($(".serial").text());
            validateInput($(".serial").text());
            $('#preloader').fadeOut('fast', function () {});

        }
        


    })
    
        $(".serialValidation").on('blur', function(){
        if($(this).val() != "" ){
            $('#preloader').fadeIn('fast', function () {});
            $('.id').html("-"+$(this).val());
            $(".serialInput").val($(".serial").text());
            validateInput($(".serial").text());
            $('#preloader').fadeOut('fast', function () {});

        }
        
    })
    
                 jQuery(document).ready(function($) {
        $("#partslist").show();
$("#<?= $FRAME_ID; ?>").attr("class","active");
})
    
</script>