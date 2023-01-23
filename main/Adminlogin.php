<?php

 // echo "login please work"

 $user_name = $_POST['user_name'];
 $password = $_POST['password'];

 //Database connection here
     $conn = new mysqli('localhost','root','','smartpay');
     if($conn->connect_error) {
        die('Failed to connect : '.$conn->connect_error);
      }     
      else {  
        $stmt = $conn->prepare("select * from admin_login where user_name = ?");
        //SELECT id, password FROM admin_login WHERE user_name = '$userName'
        $stmt->bind_param("s", $user_name);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password) {
                //echo "<h2>Login Successfully</h2>";
                header("location:AdminDash.html");
        }   else {
            echo "<h2>Invalid Email or password</h2>";
   }
       } else {
                echo "<h2>Invalid Email or password</h2>";
       }


              
     }


 


    








?>