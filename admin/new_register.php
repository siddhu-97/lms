<?php
    // include header start
include 'include/header.php';
    
include 'include/sidebar.php';
?>


<div class="card">
            <div class="card-body">
              <h3 class="card-title"><B><i>Initiate your registration process!</i></B></h3>

              <!-- Multi Columns Form -->
              <form id="myForm" class="row g-3"  enctype="multipart/form-data" >
                <div class="col-md-12">
                  <label for="Name" class="form-label"> Name</label>
                  <input type="text" class="form-control" name="inner_name" id="inner_name" placeholder="Enter your name">
                </div>
               
                 <div class="col-12">
                  <label for="inputAddress5" class="form-label">Email Address</label>
                  <input type="text" class="form-control" name="inner_email" id="inner_email" placeholder="Enter your username">
                </div>
                <div class="col-md-6">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="inner_password" id="inner_password">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Retype Password</label>
                  <input type="password" class="form-control" name="inner_Retype_password" id="inner_Retype_password">
                </div>
                <div class="col-md-6">
                  <label for="Contact" class="form-label">Contact</label>
                  <input type="text" class="form-control" name="inner_contact" id="inner_contact" placeholder="Your contact">
                </div>
                <div class="col-md-6">
                <label for="image" class="form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="inner_uploadfile" id="inner_uploadfile">
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
                         <div class="text-center">           
                         <button type="button" class="btn btn-secondary rounded-pill">Reset</button>
                         <button type="button" class="btn btn-success rounded-pill">Submit</button>
                      </div>
                       </form><!-- End Multi Columns Form --> 

            </div>
          </div>

          <?php
        include 'include/footer.php';
        ?>