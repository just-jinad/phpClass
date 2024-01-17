<?php
// echo 'Submitted';
// print_r($_POST) ;

// isset
require 'connection.php';
session_start();
if(isset($_POST['submit'])){
    print_r($_POST) ;
    // storing inside variable

        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $gender=$_POST['gender'];
        $age=$_POST['age'];
        $password=$_POST['password'];
    

    // Verifying email
        $query = "SELECT * FROM users WHERE  email='$email'";
    

        $emailverify=$dbconnection->query($query);
        print_r($emailverify);

        if ($emailverify->num_rows>0) {
        $_SESSION['msg']="Email already exists";
        header('location: signUp.php');
        }else{

//        hashing password

        $hasedpassword = password_hash($password, PASSWORD_DEFAULT);
        echo $hasedpassword;

    // saving inside the database

        $dbquery =  "INSERT INTO `staffs`( `first_name`, `last_name`, `email`, `address`, `gender`, `age`, `password`) VALUES ('$firstname', '$lastname', '$email', '$address', '$gender','$age', '$hasedpassword')";

        echo $dbquery;

        $savedquery =  $dbconnection->query($dbquery);
   
   
        if ($savedquery) {
        header('location: login.php');
        }else{
        $_SESSION['msg']="unsuccessful registration";
        header('location:signUp.php');
        }

    };

    
}


    //

//   if ($savedquery) {
//   echo  $savedquery;
//   }

// }else{

//     header('location: signUp.php');
// }
?>