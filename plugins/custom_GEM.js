/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// function used in adding new PART/CHAMBER/SUPER CHAMBER to validate the ID if it is in DB
function validateInput(serial){
    
                //check value inserted is not in DB
            $.ajax({
                url: 'functions/ajaxActions.php?validateserial=true&partid='+serial,
                success: function(data){
                            if(data == 1){
                                $(".exist").show('');
                                $(".serialValidation").addClass('alert-danger');
                                return false;
                            }
                            else{
                                $('.exist').hide();
                                $(".serialValidation").removeClass('alert-danger');
                                $(".serialValidation").addClass('alert-success');
                                $(".newId").show();
                                
                                $(".newId").delay(700).fadeOut('fast');
                                $(".serialValidation").delay(700).removeClass('alert-success');
                                
                            }
                        }
            });
}