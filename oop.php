<?php
class First{
    public $firstname = "jinad";
    public $lastname = "Isaac";
    protected $email = "jinad@gmail.com";
    public $age = 56;
    protected $school = "SQI";

    public function get(){
        return "Hello how are you doing " .$this->firstname;
    }

    public function __construct($name){
        echo " my name is ".$namej;
    }
}



$info = new First(" Isaac ");
$info->firstname;

$info->get();
echo $info->get();
// $info->lastname;
// echo $info->firstname;
// echo $info->lastname;


//how to xtend

class Second extends First{
    public function getname(){
        // return "hello i am from ".$this->age;
        return "the name of my school ".$this->school=" Sqicict";
    }
}

$info2 = new Second("victoria");
echo $info2->getname();
?>