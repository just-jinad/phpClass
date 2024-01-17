<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home of php</title>
</head>
<body>
    <div>Hello jinad</div>
</body>
</html>


<?php
$number=75;
echo'<br>';
//echo, print , print_r used to send out commands
// echo'<br>';
// echo 'welcome to PHP jinad';
// echo'<br>';
// echo'<br>';
// $name = 'hello worlddd';
// echo $name;
// echo'<br>';
// echo'<br>';
// $school='DBS';
// echo $school;

// $obj=new stdClass;
// $obj->firstname='jinad';
// $obj->lastname='Tope';
// print_r($obj);
// print_r($obj->lastname);

//indexed arrayyyyy

$firstarray=[1,2,3,4, 'hellooo world'];
// print_r($firstarray);

$secondaryarray=array('temi', 'jinad');
// print_r($secondaryarray);

//Associative array

$thirdarray=[
    "age"=>68,
    "lastname"=>"dolapo",
    "school"=>"DBS"
];

// print_r($thirdarray['lastname']);


//multidemisional array


array_push($firstarray,$secondaryarray,$thirdarray);
// print_r($firstarray);


for ($i=0; $i <count($firstarray) ; $i++) { 

    print_r($firstarray[$i]);
    # code...
};

?>