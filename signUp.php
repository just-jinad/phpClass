<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Submit form</title>
</head>
<body>
    <div class="border shadow-lg container w-50 rounded mt-4 p-5">
        <div class="">

        <?php
        session_start();
        if (isset($_SESSION['msg'])) {
            echo '<div class="text-center alert alert-danger">'
            .$_SESSION['msg'].
            '</div>';
            session_unset();
        }
        ?>
        </div>
        <p class="fst-italic fw-bold text-center mt-4 "> Sign Up here</p>
        <form action="submit.php" method="POST" >
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