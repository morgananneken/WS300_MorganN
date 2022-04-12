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
                    name: "*Please supply your name",
                    address: "*Please supply your street address",
                    city: "*Please supply your city",
                    state: "*Please  your state",
                    zip: "*Please enter your zip code",
                    email:{
                        required:"*please supply your email",
                        email:"*this is not a valid email"
                    }, //closes email message  
                    type: "*What is your registration type?",
                    tshirt: "*What size Tshirt do you want?",
                    chname: "*What is the name on the card?",
                    baddress: "*What is your billing address?",
                    bcity: "*Please supply your city",
                    bstate: "*Please  your state",
                    bzip: "*Please enter your zip code",
                    cc: "*Enter Credit Card Number",
                    ccv: "*Enter CCV",
                    exp: "*Enter Expiration Date"


                },


                errorPlacement:function(error,element){
                    
                        let errEle = element.parents('fieldset')[0].id;
                        error.appendTo('#'+errEle+' div');
                    

                }//end of error placement

            })
    }); //end of doc ready