# README #

### What is this repository for? ###

* GEM Database Graphical user interface
* Dev 0.1

this GUI is to automate the process of loading GEM construction data into database.
Data producers can do the following through it:

- Add parts ( PCBs, Foils, Vfats, GEB, Optohybrid,, etc..).
- Build chambers & super chambers
- Add QC data.
- Edit data
*  - De-attach/Attach parts from/to chamber
*  - De-attach/Attach chamber from/to super chamber

The Application backend generates XML files and automatically load it to the spool Area where the dbloader map it to the database. 

### How do I get set up? ###

* Summary of set up
* Configuration
* Dependencies
* Database configuration
* How to run tests
* Deployment instructions

### Contribution guidelines ###

* Writing tests
* Code review
* Other guidelines

### Code structure  ###

* gen_xml                                
* Uploads                          
* images                  
* plugins
* backup                           
* bootstrap-datetimepicker   
* jQuery-Multiple-Select      
* shellscript
* bootstrap-datetimepicker-master


* search.php [  Search for parts page ]
* head.php   [ Header of all pages, contains all file includes , globals , etc ]                                              
* first.php [ Main 1st page navigate to 4 sections ]
* Default.htm  [ Landing page ]
* test.php  [ for testing perpose ]  **!!**
* side.php  [ Sidebar ]  **!!**                                 
* foot.htm  [ Footer for all pages, contains all JS ]
* contact.php [ Contact page ] 
    
* show_chamber.php
* show_drift.php
* show_gem.php  
* show_qc_iv.php
* show_qc_inspxn.php 
* show_readout.php  
* show_sup_chamber.php 
* show_vfat.php   

* list_parts.php
* list_parts_drift.php
* list_parts_gem.php  
* list_parts_readout.php  
* list_parts_vfat.php    
* list_qc.php
* list_sup_chambers.php
* list_chambers.php 

* edit_chamber.php                  
* edit_drift.php
* edit_gem.php                                  
* edit_readout.php                    
* edit_sup_chamber.php                     
* edit_vfat.php 


* new_readout.php
* new_vfat.php
* new_sup_chamber.php 
* new_chamber1.php 
* new_drift.php 
* new_chamber.php  
* new_gem.php
* new_qc_inspxn.php