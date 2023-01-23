<?php
     //$admin_id = $_POST['admin_id'];
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $department = $_POST['department'];
     //$sex = $_POST['sex'];
     $phone_number = $_POST['phone_number'];
     //$date_of_commencement = $_POST['date_of_commencement'];
     $password = $_POST['password'];

    //echo "firstName: $firstName, lastName: $lastName, Department: $Department, Sex: **********, Phonenumber: $Phonenumber, DateofCommencement: $DateofCommencement, Password: $Password";
    
    //please work na


    // Database connection
    $conn = new mysqli('localhost','root','','smartpay');
    if($conn->connect_error){
        die('Connection Failed  : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into employee_information(first_name, last_name, department, phone_number, password)
            values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssis", $first_name, $last_name, $department, $phone_number, $password);
        $stmt->execute();
        //echo "registration SUCCESSFULLY...";
        header("location:login.html");
        $stmt->close();
        $conn->close();
    }






?>