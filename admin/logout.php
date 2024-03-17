<?php
 session_start();
 if(!isset($_SESSION['email'])){
    header("location:login.php");
    }
 
  session_unset();


  if(session_destroy()) // Destroying All Sessions
  {
  header("Location:login.php"); 
  }


?>