<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 13 2024 with Bootstrap v5.3.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row back_background justify-content-center">
            <div class="col-lg-5 logo_background col-md-6
             d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="" class="logo d-flex align-items-center w-auto">
                  <img class="login_logo" src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">We Care!</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-6">
                <div class="card-body">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  
                  <form id="login_form" action="action.php" method="POST" class="row g-3 needs-validation" novalidate>

                    <div class=" input-login-text col-12">
                      <label for="yourUsername" class="form-label">Email Address</label>
                        <input type="text" name="login_email" class="form-control" id="yourUsername">                  
                        <span class="input-login-Error-text" id="usernameError"></span>                     
                    </div>                    
                    <div class="input-login-text col-12">
                      <label for="yourPassword" class="form-label">Password</label>                     
                      <input type="password" name="login_password" class="form-control" id="yourPassword">
                      <span class="input-group-text" id="passwordError"></span>
                      <button type="button" id="togglePassword" class="toggle-password" onclick="togglePasswordField()">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>

                    <div class="input-login-text col-12">
                      <button class="btn btn-primary w-100" type="submit" onclick=" validateLogin()">Login</button>
                    </div>
                    <div class="col-12">

                      <p class="small mb-0">Don't have account? <a href="" data-bs-toggle="modal" data-bs-target="#basicModal">Create an account</a></p>
                      <p class="forgot small mb-0">Forgot Password? <a href="" data-bs-toggle="modal" data-bs-target="#forgot_modal">click here</a></p>
                    </div>
                  </form>
                  <!-- Basic Modal -->
              <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="registrstion_form modal-content">
                    <div class="modal-header" style="height: 60px;">
                    <h3 class="registration_title card-title"><B><i>Initiate your registration process with W<sup><b>3</b></sup> Care!</i></B></h3>
                    <img class="registration_logo" src="assets/img/logo.png" alt="">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <!-- Multi Columns Form -->
                <form id="myForm" class="registration row g-3"  enctype="multipart/form-data" >
                <div class="col-md-12">
                  <label for="Name" class="form-label"> Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="col-md-12">
                  <label for="designation" class="form-label">Designation</label>
                  <input type="text" class="form-control" name="designation" id="designation" placeholder=" your designation">
                </div>
               
                 <div class="col-12">
                  <label for="inputAddress5" class="form-label">Email Address</label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Enter your username">
                </div>
                <div class="col-md-6">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Retype Password</label>
                  <input type="password" class="form-control" name="Retype_password" id="inputPassword5" placeholder="Retype your password">
                </div>
                <div class="col-md-6">
                  <label for="Contact" class="form-label">Contact</label>
                  <input type="text" class="form-control" name="contact" id="contact" placeholder="Your contact">
                </div>
                <div class="col-md-6">
                <label for="image" class="form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="uploadfile" id="formFile">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>    
                </div>
                      <div class="modal-footer"> 
                         <div class="text-center">
                          <button type="button" class="btn btn-secondary" id="close_modal" data-bs-dismiss="modal">Close</button> 
                           <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                         <button type="reset" class="btn btn-secondary">Reset</button>
                       </div>                       
                      </div>
                       </form><!-- End Multi Columns Form --> 
                  </div>
                  </div>
                </div>
              </div>
              <!-- End Basic Modal-->

              <!-- Modal  for forgot password start-->
            <!-- Basic Modal -->
          
              <div class="modal fade" id="forgot_modal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Basic Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      O bhai forgot password karna sikh le pahle..
                        </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Basic Modal-->
            <!-- Modal  for forgot password start-->
                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
 
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/validation_insert.js"></script>
  <script>
function togglePasswordField() {
  const password = document.querySelector('#yourPassword');
  const toggleButton = document.querySelector('#togglePassword');

  // toggle the type attribute
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);

  // toggle the eye icon
  const eyeIcon = toggleButton.querySelector('i');
  if (eyeIcon.classList.contains('fa-eye')) {
    eyeIcon.classList.remove('fa-eye');
    eyeIcon.classList.add('fa-eye-slash');
  } else {
    eyeIcon.classList.remove('fa-eye-slash');
    eyeIcon.classList.add('fa-eye');
  }
}

  </script>
 <script>
function validateLogin(){ -->
          <!-- alert("hey you clicked the submit button");
     


        document.getElementById('login_form').addEventListener('submit', function(event) {
            var username = document.getElementById('yourUsername').value;
            var password = document.getElementById('yourPassword').value;
            var usernameError = document.getElementById('usernameError');
            var passwordError = document.getElementById('passwordError');        
            var isValid = true;

            // Clear previous error messages
            usernameError.textContent = '';
            passwordError.textContent = '';

            // Custom validation logic -->
            <!-- if (username.trim() === '') {
                usernameError.textContent = '*Username is required';
                isValid = false;
            }

            if (password.trim() === '') {
                passwordError.textContent = '*Password is required';
                isValid = false;
               }   
            else if(password.length<6){
                passwordError.textContent = '*Password must be greater than 6 characters';
                isValid = false;
            } 
                  if (!isValid) {
                event.preventDefault(); // Prevent form submission if validation fails
            }
          
        });
        
      }
    </script>

  

</body>

</html>