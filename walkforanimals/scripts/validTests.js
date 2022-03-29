$(document).ready(function(){
        $('#register').validate(
            {
                // validate on focus out
                onfocusout: function(element) { 
                    $(element).valid(); 
                },

                rules:{
                    name:'required',
                    email:{
                        required:true,
                        email:true
                    } //closes email
                }, //closes rules

                messages:{
                    name:{
                        required:"Please supply your name"
                    },//closes name message
                    email:{
                        required:"please supply your email",
                        email:"this is not a valid email"
                    } //closes email message  
                },//closes messages
                errorPlacement:function(error,element){
                    if(element.is(":radio")||element.is(":checkbox")){
                        error.appendTo(element.parent());
                    }else{
                        error.insertAfter(element);
                    }

                }//end of error placement

            });//end of validate
    }); //end of doc ready