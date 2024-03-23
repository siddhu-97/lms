<?php
    // include header start
include 'include/header.php';
    
include 'include/sidebar.php';
?>

<?php
include 'connection/connection.php';
$data= "SELECT `id`, `name`, `designation`, `email`, `password`, `contact`, `image`, `status`, `date` FROM `user`";
 $my_query= mysqli_query($connect,$data);
 $value= $my_query->fetch_all(MYSQLI_ASSOC);
?>

    <!-- <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        </ol>
      </nav> -->
    <!-- </div> -->
    <!-- End Page Title -->
     
               <div class="modal fade" id="LargeModal" tabindex="-1">
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
                    <div class="col-md-6">
                      <label for="Name" class="form-label"> Name</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <div class="col-md-6">
                    <label for="image" class="form-label">File Upload</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" name="uploadfile" id="formFile">
                      </div>
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
                    <div class="col-md-12">
                      <label for="Contact" class="form-label">Contact</label>
                      <input type="text" class="form-control" name="contact" id="contact" placeholder="Your contact">
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
              <!-- End large  Modal-->
              

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-right"></div>
                <button type="button" id="add_user " class="add_user btn btn-info" data-bs-toggle="modal" data-bs-target="#LargeModal">+Add User</button>
              <h5 class="card-title">Our Creative members!</h5>
              <!-- Table with stripped rows -->
              <table id="table" class="table datatable table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th> <b>N</b>ame </th>
                    <th>Designation</th>
                    <th>Email</th>
                    <th>contact</th>
                    <th>Image</th>
                    <th>status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                     $id=1;
                     foreach($value as $row){
                    
                    ?>
                  <tr>
                    <td><?php echo $id; ?></td>
                    <td><b><?php echo $row['name'];?></b></td>
                    <td><?php echo $row['designation'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['contact'];?></td>
                    <td><img width="50px" height="50px" src="upload/<?=$row['image'];?>"></td>
                    <td><?php echo $row['status'];?></td>
                    <td>
                    <a data-id="<?=$row['id']?>" id="delete"  class="delete"><i class="fas fa-trash-alt" style="font-size:24px;color:red"></i></a>
                     </td>
                   
                  </tr>
                  <?php
                  $id++;
                     }
                  ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

<script>

// deteting the data from data base  start
$(document).ready(function() {

  // alert();
$("#table").on("click","#delete",function(e){
  e.preventDefault();
    if(confirm("your data is deleting, please confirm!")){
        var id=$(this).data("id");
        // alert(id);
        $.ajax({
            url:"delete.php",
            type:"GET",
            data:{
                id:id
            },
            success:function(data){
              if(data)
              {
                Swal.fire("deleted successfully");
                $("#table tbody").html(data)
              
              }
              else{
                alert("not deleted");
              }
            }
        })
    }
    else{
      Swal.fire("deletion cancelled");
        
    }

});
});
// deteting the data from data base  end


</script>
<script src="assets/js/validation_insert.js"></script>
<?php
include 'include/footer.php';
?>
