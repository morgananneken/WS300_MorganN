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
                    },//closes email
                     tshirt: 'required',
                     type: 'required',
                }, //closes rules

                messages:{
                    name: "Please supply your name",
                    email:{
                        required:"please supply your email",
                        email:"this is not a valid email"
                    }, //closes email message  
                    type: "What is your registration type?",
                    tshirt: "What size Tshirt do you want?"
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