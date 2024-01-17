<?php
require "connection.php";
if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM staffs WHERE email=?";
    $prepare = $dbconnection->prepare($query);
    $prepare->bind_param('s', $email);
    $check = $prepare->execute();
    $execute = $prepare->get_result();
    // print_r($execute );
    if ($execute->num_rows > 0) {
        $user = $execute->fetch_assoc();
        // print_r($user);
        //Print User
        $hashedpassword = $user['password'];
        $userid = $user['staff_id'];
        echo $hashedpassword, $userid;

        // Verify password
        $passwordVerify = password_verify($password, $hashedpassword);
        if ($passwordVerify) {
            echo $userid;
            $_SESSION['user_id'] = $userid;
            // header('location: dashboard.php');
        } else {
            echo "<div class='text-center alert alert-danger'> Incorrect password </div> ";
        }

    } else {
        echo "<div class='text-center alert alert-danger'> Incorrect email </div> ";

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Sign  In page</title>
</head>
<body>
dy>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

            <div class="shadow rounded mt-5 w-50 mx-auto p-4">
                <h4 class="text-center">Login Page two</h4>
                <input type="text" placeholder="Enter email" class="form-control my-2" name="email">
                <input type="text" placeholder="Enter Password" class="form-control my-2" name="password">
                <input type="submit" class="btn btn-info my-2 w-100" name="submit">
            </div>

        </form>
    </div>
</body>
</html>