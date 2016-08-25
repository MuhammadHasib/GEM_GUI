<?php

/*
 *  Usage: Contains all the global values , that will be commonly used in the application.
 *  Author: Ola Aboamer [o.aboamer@cern.ch]
*/

/* Kind of parts Constants */

// 1st IDs
//Kind of part id for Chambers
$CHAMBER_KIND_OF_PART_ID = "10000000000001719";
//Kind of part id for Drift boards
$DRIFT_KIND_OF_PART_ID = "10000000000001599";
//Kind of part id for GEM Foils
$FOIL_KIND_OF_PART_ID = "10000000000001659";
//Kind of part id for Readout boards
$READOUT_KIND_OF_PART_ID = "10000000000001679";
//Kind of part id for VFAT chips
$VFAT_KIND_OF_PART_ID = "10000000000001699";
//Kind of part id for Optohybrids
$OPTOHYBRID_KIND_OF_PART_ID = "10000000000002399";
//Kind of part id for AMCs
$AMC_KIND_OF_PART_ID = "10000000000002419";
//Kind of part id for AMC13
$AMC13_KIND_OF_PART_ID = "10000000000002439";
//Kind of part id for HUBs
$HUB_KIND_OF_PART_ID = "10000000000002459";
//Kind of part id for MicroTCAs
$MICROTCA_KIND_OF_PART_ID = "10000000000002479";
//Kind of part id for GEBs
$GEB_KIND_OF_PART_ID = "10000000000002799"; 
 
//2nd Names
//Kind of part name for Chambers
$CHAMBER_KIND_OF_PART_NAME = "GEM Chamber";
//Kind of part name for Drift boards
$DRIFT_KIND_OF_PART_NAME = "GEM Drift PCB";
//Kind of part name for GEM Foils
$FOIL_KIND_OF_PART_NAME = "GEM Foil";
//Kind of part name for Readout boards
$READOUT_KIND_OF_PART_NAME = "GEM Readout PCB";
//Kind of part name for VFAT chips
$VFAT_KIND_OF_PART_NAME = "GEM VFAT2";
//Kind of part name for Optohybrids
$OPTOHYBRID_KIND_OF_PART_NAME = "GEM Opto Hybrid";
//Kind of part name for AMCs
$AMC_KIND_OF_PART_NAME = "GEM AMC Gigabit Link Interface Board";
//Kind of part name for AMC13
$AMC13_KIND_OF_PART_NAME = "GEM AMC13 Board";
//Kind of part name for HUBs
$HUB_KIND_OF_PART_NAME = "GEM Main Carrier HUB";
//Kind of part name for MicroTCAs
$MICROTCA_KIND_OF_PART_NAME = "GEM Micro TCA Crate";
//Kind of part name for GEBs
$GEB_KIND_OF_PART_NAME = "GEM Electronics Board"; 
 
 
/***********************************************/


// 1st Set of XML tags names Common between all parts
$SERIAL_NUMBER = "SERIAL_NUMBER";
$NAME_LABEL = "NAME_LABEL";
$LOCATION = "LOCATION";
$COMMENT_DESCRIPTION = "COMMENT_DESCRIPTION";
$BARCODE = "BARCODE";
$KIND_OF_PART = "KIND_OF_PART";
$RECORD_INSERTION_USER = "RECORD_INSERTION_USER";
$MANUFACTURER = "MANUFACTURER";

// 2nd Set of XML sub tags names for chamber 


/****SideBar list Tags IDs ****/

// Drift boards
$DRIFT_ID = "GEMDriftPCB";
//Kind of part name for GEM Foils
$FOIL_ID = "GEMFoil";
//Kind of part name for Readout boards
$READOUT_ID = "GEMReadoutPCB";
//Kind of part name for VFAT chips
$VFAT_ID = "GEMVFAT";
//Kind of part name for Optohybrids
$OPTOHYBRID_ID = "GEMOptoHybrid";
//Kind of part name for AMCs
$AMC_ID = "GEMAMCGigabitLinkInterfaceBoard";
//Kind of part name for AMC13
$AMC13_ID = "GEMAMC13Board";
//Kind of part name for HUBs
$HUB_ID = "GEMMainCarrierHUB";
//Kind of part name for MicroTCAs
$MICROTCA_ID = "GEMMicroTCACrate";
//Kind of part name for GEBs
$GEB_ID = "GEMElectronicsBoard";



/***** Part to Part Relationship IDs *****/
$VFAT2_TO_GEB="10000000000005639";
$OPTOHYBRID_TO_GEB="10000000000005239";
$GEB_TO_READOUT="10000000000004839";
$READOUT_TO_CHAMBER="10000000000002000";
$FOIL_TO_CHAMBER="10000000000002001";
$DRIFT_TO_CHAMBER="10000000000002002";



/****** Root part Information *****/
$ROOT_BARCODE= "CMS-GEM-ROOT";
$ROOT_KIND_OF_PART ="GEM Detector ROOT";
$ROOT_SERIAL_NUM="ROOT";


