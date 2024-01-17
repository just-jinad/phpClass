<?php
require('connection.php');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');
$input = json_decode(file_get_contents('php://input'),true);
echo json_encode( $input['password'] );

        $firstname=$input['firstname'];
        $lastname=$input['lastname'];
        $email=$input['email'];
        $address=$input['address'];
        $gender=$input['gender'];
        $age=$input['age'];
        $password=$input['password'];


$query = "SELECT * FROM staffs WHERE  email=?";
$emailverify=$dbconnection->prepare($query);
$emailverify->bind_param('s',$email);
$emailverify->execute();
$res=$emailverify->get_result();




if ($res->num_rows > 0) {
    echo json_encode(array("status" => false, "message" => "Email already exists!"));
} else {
    $hashedpassword = password_hash($input['password'], PASSWORD_DEFAULT);

    $dbquery = "INSERT INTO staffs( first_name, last_name, email, address, gender, age, password) VALUES (?,?,?,?,?,?,?)";
    $prepare = $dbconnection->prepare($dbquery);
    $bind = $prepare->bind_param("ssssiss", $firstname, $lastname, $email, $address, $gender, $age, $hashedpassword); // Fix the order of the types

    $prepare->execute();

    if ($prepare->affected_rows > 0) {
        echo json_encode(array("status" => true, "message" => "Registration successful"));
        // header("f");
    } else {
        echo json_encode(array("status" => false, "message" => "Unsuccessful registration!"));
    }
}

        // if ($res->num_rows > 0) {
        //         echo json_encode(array("status"=>false,"message" => "Email already exists!"));  
        // }else {
        //         $hashedpassword = password_hash($input['password'], PASSWORD_DEFAULT);
            
        //         $dbquery =  "INSERT INTO staffs( first_name, last_name, email, address, gender, age, password) VALUES (?,?,?,?,?,?,?)";
        //         $prepare = $dbconnection->prepare($dbquery);
        //         $bind = $prepare->bind_param("sssssis", $firstname, $lastname, $email, $address, $gender, $age,  $hasedpassword);
        //         $prepare->execute();
            
        //         if ($prepare->affected_rows > 0) {
        //             echo json_encode(array("status"=>true,"message" => "Registration successful"));
        //         } else {
        //             echo json_encode(array("status"=>false,"message" => "Unsuccessful registration!"));
        //         }
        //     };
            


?>