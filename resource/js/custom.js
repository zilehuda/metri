 $(document).ready(function() {
 $("#Registerform").validate({
           rules: {
               pwd: { 
                 required: true,
                    minlength: 6,
                    maxlength: 10,

               } , 

                   cfmpwd: { 
                    equalTo: "#pwd",
                     minlength: 6,
                     maxlength: 10
               } ,
                age: { 
                    
                     range: [18,55]
               }


           },
     messages:{
         password: { 
                 required:"the password is required"

               }
     }

       });
 });