    // jquery validation starts 

  $(document).ready(function(){

  $.validator.addMethod(
    "emailAddress",
    function (value, element) {
        // Regular expression for validating email addresses
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return this.optional(element) || emailPattern.test(value);
    },
    "Please enter a valid email address."
  );
$.validator.addMethod(
    "alphaOnly",
    function (value, element) {
      var alphaPattern = /^[A-Za-z\s]+$/;
      return this.optional(element) ||(value.length > 4 && alphaPattern.test(value));
    },
    
    "Please enter a valid name."
  );
  $.validator.addMethod(
    "passwordValidation",
    function (value, element) {
      // Password pattern: at least 8 characters, at least one uppercase letter, one lowercase letter, and one digit.
      var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{6,}$/;
      return this.optional(element) || passwordPattern.test(value);
    },
    "Please enter a password with at least 6 characters, including at least one uppercase & lowercase letter, and one special characters."
);
$.validator.addMethod(
  "numericOnly",
  function (value, element) {
      var numericPattern = /^\d+$/; // Pattern to match only numeric characters
      return this.optional(element) || numericPattern.test(value);
  },
  "Please enter a contact number with numeric characters only."
);

    $("#myForm").validate({
      rules:{
        name:{
          required:true,
          alphaOnly: true
        },
        email:{
          required: true,
          emailAddress: true
        },
        password:{
          required: true,
          passwordValidation: true
        },
        Retype_password:{
          required: true,
          equalTo: "#password"
        },
        contact:{
          required: true,
          numericOnly: true
        },
        uploadfile:{
          required: true
        },

      },
      messages:{
        name:{
          required: "field is required"
        },
        email:{
          required: "field is required"
        },
        password:{
          required: "field is required"
        },
        retype_password:{
          required: "field is required",
          equalTo: "passwords must be same"
        },
        contact:{
          required: "field is required"
        },
        uploadfile:{
          required: "field is required"
        },

      }
  
    });
   
      $("#submit").on('click', function(e){
         var form = $('#myForm')[0];
         var formData = new FormData(form);
         e.preventDefault();
         if($("#myForm").valid())
             
        {
            $.ajax({
                url: "action.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: formData,
                success: function(response)
                {  
                   
                  $("#myForm")[0].reset();               
                  $('#close_modal').click();
                  // Swal.fire("Data Submitted Successfully");
               },

            });          
        }
        else{
           alert("check dude form is not valid");
        }
       
      });
});
