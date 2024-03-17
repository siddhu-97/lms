<?php
 include 'connection/connection.php';
      session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if(isset($_POST['name']))
        {
            $name= $_POST['name'];
            $email= $_POST['email'];
            $password= $_POST['password'];
            $contact= $_POST['contact'];
            $filename= $_FILES["uploadfile"]['name'];
            $tempname= $_FILES["uploadfile"]['tmp_name'];
            $folder = "./upload/". $filename;
            //user register
             $sql2="SELECT email  from `user` WHERE email= $email";
             $result2=mysqli_query($connect,$sql2);
             if($result2){
              echo "user already registred";
            }else{
               $sql = "INSERT INTO `user`(`name`, `email`, `password`, `contact`, `image`) 
                    VALUES ('$name','$email','$password','$contact','$filename')";

              $result=mysqli_query($connect,$sql);
              if($result){
                    echo "done";
              }else{
                echo "not done";
              }
        }
        // user registration end          
       }
         // login start
         if(isset($_POST['username']))
         {
            $usernamet= $_POST['username'];
            $pass= $_POST['password'];  

            // echo $usernamet;
            // echo $pass;
            $sql2="SELECT `id`, `name`, `email`, `password`, `contact`, `image`, `status`, `date` FROM `user` WHERE email= '$usernamet'";
            $result2=mysqli_query($connect,$sql2);
            if ($result2 && mysqli_num_rows($result2) == 1) {
                  // Set session variables
                  $user = mysqli_fetch_assoc($result2);
                  if($usernamet == $user['email'] AND $pass == $user['password']){
                  $_SESSION['email'] = $user['email'];
                  $_SESSION['pass'] = $user['password'];
                  $_SESSION['image'] = $user['image'];
                  // echo $_SESSION['email'];
                  // echo $_SESSION['pass'];
                  // echo $_SESSION['image'];
                  header('location:index.php');
                  exit();
                  }
                  else{
                        header('location: login.php');
                  }
                 
              }
              else{
                  header('location: login.php');
            }
         }
    }
        

?>