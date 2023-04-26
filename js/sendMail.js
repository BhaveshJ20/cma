function validateContactus(){
    if($('#frmcontactus').valid()){
         $.ajax({
                  type: "POST",
                  url: "ajax_process_request.php",
                  data:{first_name:$('input[name="fname"]').val(),last_name:$('input[name="surname"]').val(),email:$('input[name="email"]').val(),contact_no:$('input[name="cnumber"]').val(),query:$('textarea[name="query"]').val(),type:"contact"},
                  dataType: "text",
                  success: function(resultData){              
                    if(resultData == "success"){                        
                        location = 'thankyou/';
                    }else{
                        $(".errormsg").html(resultData);
                }
            }
        });
    }
}

function validateapply(){
    if($('#frmapply').valid()){
        
        $.ajax({
                  type: "POST",
                  url: "ajax_process_request.php",
                  data:{first_name:$('input[name="fname"]').val(),last_name:$('input[name="surname"]').val(),email:$('input[name="email"]').val(),contact_no:$('input[name="cnumber"]').val(),campus:$('select[name="campus"]').val(),course:$('input[name="course"]').val(),joiningdate:$('input[name="joiningdate"]').val(),tandc:$('input[name="tandc"]').val(),update:$('input[name="update"]').val(),type:"apply"},
                  dataType: "text",
                  success: function(resultData){              
                    if(resultData == "success"){                        
                        location = 'thankyou/';
                    }else{
                        $(".errormsg").html(resultData);
                }
            }
        });
    }
}
function validateScholarship(){
    if($('#frmscholarship').valid()){
         $.ajax({
                  type: "POST",
                  url: "ajax_process_request.php",
                  data:{first_name:$('input[name="fname"]').val(),last_name:$('input[name="surname"]').val(),email:$('input[name="email"]').val(),tnumber:$('input[name="tnumber"]').val(),query:$('textarea[name="query"]').val(),type:"scholarship"},
                  dataType: "text",
                  success: function(resultData){              
                    if(resultData == "success"){                        
                        location = 'thankyou/';
                    }else{
                        $(".errormsg").html(resultData);
                }
            }
        });
    }
}

function validateCourse(){
    if($('#frmcourse').valid()){
         $.ajax({
                  type: "POST",
                  url: "ajax_process_request.php",
                  data:{email:$('input[name="email"]').val(),type:"course",course_name:$('input[name="course_name"]').val()},
                  dataType: "text",
                  success: function(resultData){              
                    if(resultData == "success"){                        
                    location = 'thankyou/';
                    }else{
                        $(".errormsg").html(resultData);
                }
            }
        });
    }
}


$(function()
  {
    $('#frmapply').validate(
      {        
        // errorClass: 'help-inline',
        errorElement: 'p',
        errorPlacement: function(error, element) 
        {
            if ( element.is(":checkbox") ) 
            {
                if(element[0].name == "tandc" || element[0].name == "update"){
                    error.appendTo( element.parents('.custom_checkbox') );
                }else{
                    error.appendTo( element.parents('.cma-custom_checkbox') );
                }
            }
            else if ( element.is("select") ) 
            {
                error.appendTo( element.parents('.customselect') );
            }
            else 
            { // This is the default behavior 
                error.insertAfter( element );
            }
         }
      });

  });