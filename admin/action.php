<?php
 include 'connection/connection.php';
    session_start();
 
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        
        if(isset($_POST['name']))
        {
            $name= $_POST['name'];
            $designation= $_POST['designation'];
            $email= $_POST['email'];
            $password= $_POST['password'];
            $contact= $_POST['contact'];
            $filename= $_FILES['uploadfile']['name'];
            $tempname= $_FILES['uploadfile']['tmp_name'];

            //    echo $name;
            //    echo $email;
            //    echo $password;
            //    echo $contact;
            //    print_r($_FILES['uploadfile']);

             //user register
             $sql2="SELECT email  from `user` WHERE email= $email";
             $result2=mysqli_query($connect,$sql2);
             if($result2){
              echo "user already registred";
            }
            else{
                    $folder = "./upload/". $filename;
                    if(move_uploaded_file($tempname,$folder))
                        {
                            $sql=  "INSERT INTO `user`(`name`, `designation`, `email`, `password`, `contact`, `image`) 
                            VALUES ('$name','$designation','$email','$password','$contact','$filename')";
                            $query1= mysqli_query($connect,$sql);
                            if($query1)
                                {
                                echo "your data has been successfully submitted to the datbase";
                                }
                            else
                            {
                                echo "not submitted to the database";
                            }
                    }
            }

        }
        //   start login
        if(isset($_POST['login_email']))
        {
           $login_email=$_POST['login_email'];
           $login_password=$_POST['login_password'];
        //    echo $login_email;
        //    echo $login_password;
          
           $sql3= "SELECT `id`, `name`, `designation`, `email`, `password`, `password2`, `contact`, `image`, `status`, `date` FROM `user` WHERE email='$login_email'";
           $query3= mysqli_query($connect,$sql3);
    
        //    $value= mysqli_num_rows($query3);
        // Check if query executed successfully and if there is exactly one row returned
        
        // Fetch the row as an associative array
        $value2 = mysqli_fetch_assoc($query3);
        // print_r($value2['password2']);
        // die();
               if($value2['password2']==""){
                header('location:confirm_password.php');
               }
               else{

               
                // Verify password using password_verify function
                if($login_email == $value2['email'] AND $login_password == $value2['password'])
                {               
                    // Store user information in session variables
                    $_SESSION['email_address'] = $value2['email'];
                    $_SESSION['my_password'] = $value2['password'];
                    $_SESSION['my_image'] = $value2['image'];
                    $_SESSION['user_name'] = $value2['name'];
                    $_SESSION['my_designation'] = $value2['designation'];
                    $_SESSION['user_contact'] = $value2['contact'];

                header('location:index.php');   
                    exit();
                } 
                else {
                    // Redirect to login page if password is incorrect
                    header('location:login.php');
                    exit();
                }
            }



        }

    }

    


?>