<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li id="dash" class=""><a href="first.php">Dashboard <span class="sr-only">(current)</span></a></li>
        <li id="part" class=""><a href="list_parts.php">Parts</a>
            <ul id="partslist" style="display: none;">
                <li id="<?= $FOIL_KIND_OF_PART_NAME; ?>" class=""><a href="list_parts_gem.php">FOILs</a>
                <li id="<?= $GEB_KIND_OF_PART_NAME; ?>" class=""><a href="list_parts_geb.php">GEBs</a>
                <li id="<?= $DRIFT_KIND_OF_PART_NAME; ?>" class=""><a href="list_parts_drift.php">DRIFTs</a>
                <li id="<?= $READOUT_KIND_OF_PART_NAME; ?>" class=""><a href="list_parts_readout.php">READOUTs</a>  
                <li id="<?= $OPTOHYBRID_KIND_OF_PART_NAME; ?>" class=""><a href="list_parts_opto.php">OPTOHYBRIDs</a>
                <li id="<?= $VFAT_KIND_OF_PART_NAME; ?>" class=""><a href="list_parts_vfat.php">VFATs</a>
            </ul>
        </li>
        <li id="chamber" class=""><a href="list_chambers.php">Chambers</a></li>
        <li id="schamber" class=""><a href="list_sup_chambers.php">SuperChambers</a></li>
        <li id="qc" class=""><a href="list_qc.php">Quality Controls</a></li>
    </ul>
    <!-- <ul class="nav nav-sidebar">
       <li><a href="">Nav item</a></li>
       <li><a href="">Nav item again</a></li>
       <li><a href="">One more nav</a></li>
       <li><a href="">Another nav item</a></li>
       <li><a href="">More navigation</a></li>
     </ul>
     <ul class="nav nav-sidebar">
       <li><a href="">Nav item again</a></li>
       <li><a href="">One more nav</a></li>
       <li><a href="">Another nav item</a></li>
     </ul>-->
</div>