<?php 
session_start();
require 'connection.php';
echo$_SESSION['user_id'];
if(isset($_POST['submit'])){
    print_r($_FILES['profile_pic']['tmp_name']);
    $name = $_FILES['profile_pic']['name'];
    echo $name;
    $temp = $_FILES['profile_pic']['tmp_name'];

    // Changing the name with time function

    $newName = time().$name;
    echo $newName;

    //movingthe images to another location
    $movedFile = move_uploaded_file($temp, 'images/'.$newName);
    $userid=$_SESSION['user_id'];
    echo $userid; 


    if($movedFile){
        $query    = "UPDATE staffs SET staff_dp = '$newName' WHERE staff_id = $userid";
        $queryCon= $dbconnection->query($query);
        if ($queryCon) {
            header("location: dashboard.php");

        }else{
            echo 'falied';  
            $_SESSION['error']='upload failed';
            // header('location: dashboard.php');

        }

        // $newName = $query->fetch_assoc();
        // echo $newName;

    }else{
        $_SESSION['error'] = 'upload failed try again!';
        // header('location: dashboard.php');

    };
    
}

?>