<?php
    require "connection.php";
    if(isset($_POST["submit"])){
        
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $gender=$_POST['gender'];
        $age=$_POST['age'];
        $password=$_POST['password'];
    
        //hashed password
        $hasedpassword=password_hash($password, PASSWORD_DEFAULT);
      
        $query = "SELECT * FROM staffs WHERE  email=?";
    

        $emailverify=$dbconnection->prepare($query);
        $emailverify->bind_param('s',$email);
        $emailverify->execute();
        $res=$emailverify->get_result();
       

        if ($res->num_rows>0) {
        $_SESSION['msg']="Email already exists";
        } else {
        // placeholder
        $dbquery =  "INSERT INTO staffs( first_name, last_name, email, address, gender, age, password) VALUES (?,?,?,?,?,?,?)";

        //preparing

        $prepare = $dbconnection->prepare( $dbquery);
        $bind = $prepare->bind_param("sssssis", $firstname, $lastname, $email, $address, $gender, $age,  $hasedpassword);
       
        $check = $prepare->execute();
        print_r ($check);
        header('location:signnIn.php');
        }

   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>SQL Statement</title>
</head>
<body>
        <div class="w-50 mx-auto">
        <p class="fst-italic fw-bold text-center mt-4 "> Sign Up here</p>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >
        <?php 
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
            }
        ?>
            <input class="form-control my-3 w-70" type="text" placeholder="firstname" name="firstname">
            <input class="form-control my-3 w-70" type="text" placeholder="lastname" name="lastname">
            <input class="form-control my-3 w-70" type="text" placeholder="email" name="email">
            <input class="form-control my-3 w-70" type="text" placeholder="Address" name="address">
            <input class="form-control my-3 w-70" type="text" placeholder="Gender" name="gender">
            <input class="form-control my-3 w-70" type="text" placeholder="Age" name="age">
            <input class="form-control my-3 w-70" type="text" placeholder="Enter password" name="password">
            <button class="btn btn-warning text-white w-100 mb-3 fw-bold" type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>