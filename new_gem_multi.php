
<?php
include "head.php";
?>


<div class="container-fluid">
    <div class="row">

<?php include "side.php"; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">GEM FOIL History </h1>
             <div class="col-xs-6 panel-info panel" style="padding-left: 0px; padding-right: 0px;">
                            <div class="panel-heading">
                                <h3 class="panel-title" >  <span aria-hidden="true" class="glyphicon glyphicon-info-sign"></span>Foil History information</h3>
                            </div>
                 <div class="panel-body">
                     
                 
                 
            
            <?php 
            // Access the page 1st time need to define number of foils having History info to be inserted
            if(!isset($_POST['numOfFoils'])){ ?>
            <form method="POST" action="new_gem_multi.php">
                <div class="form-group">
                    <label for="exampleInputFile">How many FOILs do you want to load history information for ?? </label>
                    <input class="" name="numOfFoils" value="">
                </div>
                 <button type="submit" class="btn btn-default btn-lg subbutt_at">Next</button>
            </form>
            <?php } ?>
            
            <?php 
            //  number of foils having History info to be inserted, defined , generate form 
            if(isset($_POST['numOfFoils'])){ 
                $num = $_POST['numOfFoils'];
                ?>
            
            <form method="POST" action="new_gem_multi.php">
             <input hidden="" value="<?= $num; ?>" name="foilsnumbersubmitted">
             <div class="form-group">
                 
             </div>
             <div class="form-group">
                
                <label for="exampleInputFile"> Pick FOIL/s </label>
                <div class="row">
                    <div class="col-md-4">
                        <?php for($i = 1 ; $i <= $num; $i++) {?>
                        <div class="form-group">
                            <label for="exampleInputFile">FOIL <?= $i ?> </label>
                            <span class="alert-danger vfatalert" hidden> <i class="ace-icon fa fa-times-circle alert-danger"></i> </span>
                            <input class="vfatinput vfat0" name="foil<?= $i ?>" value="" hidden><br>
                            <!--multiple=""-->
                            <select tabindex="-1"  class="chosen-select-foil-<?= $i ?>" style="" data-placeholder="Choose FOIL">
                                <option value=""></option>
                                <optgroup label="Foil">
                                <?php
                                $arr = list_parts($FOIL_KIND_OF_PART_ID);
                                foreach ($arr as $value) {
                                    echo "<option>" . $value['SERIAL_NUMBER'] . "</option>";
                                }
                                ?>

                                </optgroup>
                            </select>


                        </div>   
                        <?php }?>
                    </div>
                </div>
            </div>
                 <button type="submit" class="btn btn-default btn-lg subbutt_at">Submit</button>
            </form>
            
           <?php } ?>
                 </div>
                 </div>
             <?php 
            //  Form Submitted , need to generate XML 
            if(isset($_POST['foilsnumbersubmitted'])){
            }?>

        </div>
    </div>
</div>



<?php
include "foot.php";

?>
<script>
$( "select[class^='chosen-select-foil-']" ).chosen();

$("select[class^='chosen-select-foil-']").on('change', function (evt, params) {
           $(this).prev().prev().val($(this).chosen().val());      
});

</script>