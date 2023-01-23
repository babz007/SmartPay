<?php

 // echo "login please work"

 $employee_id = $_POST['employee_id'];
 $password = $_POST['password'];

 //Database connection here
     $conn = new mysqli('localhost','root','','smartpay');
     if($conn->connect_error) {
        die('Failed to connect : '.$conn->connect_error);
      }     
      else {  
        $stmt = $conn->prepare("select * from employee_information where employee_id = ?");
        $stmt->bind_param("s", $employee_id);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password) {
                //echo "<h2>Login Successfully</h2>";
                header("location:EmployeeDash.html");
        }   else {
            echo "<h2>Invalid Email or password</h2>";
   }
       } else {
                echo "<h2>Invalid Email or password</h2>";
       }


              
     }


 


    








?>