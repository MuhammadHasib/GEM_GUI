
<?php
include "head.php";
?>


<div class="container-fluid">
    <div class="row">

<?php include "side.php"; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">GEM FOIL History </h1>
            
            <?php if(!isset($_POST['numOfFoils'])){ ?>
            <form method="POST" action="new_gem_multi.php">
                <div class="form-group">
                    <label for="exampleInputFile">How many FOILs do you want to load history information for ?? </label>
                    <input class="" name="numOfFoils" value="">
                </div>
                 <button type="submit" class="btn btn-default btn-lg subbutt_at">Submit</button>
            </form>
            <?php } ?>
            
            <?php if(isset($_POST['numOfFoils'])){ 
                $i = $_POST['numOfFoils'];
                ?>
            
            <form method="POST" action="new_gem_multi.php">
            <div class="form-group">
                <label for="exampleInputFile"> Pick a FOIL </label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputFile">FOIL <?= $i ?> </label>
                            <span class="alert-danger vfatalert" hidden> <i class="ace-icon fa fa-times-circle alert-danger"></i> </span>
                            <input class="vfatinput vfat0" name="foil<?= $i ?>" value="" hidden><br>
                            <!--multiple=""-->
                            <select tabindex="-1"  class="chosen-select-foil-<?= $i ?>" style="" data-placeholder="Choose VFAT">
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
include "foot.php";

?>
<script>
$( "select[class^='chosen-select-foil-']" ).chosen();

$("select[class^='chosen-select-foil-']").on('change', function (evt, params) {
           $(this).prev().val($(this).chosen().val());      
});

</script>