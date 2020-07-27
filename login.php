<?php

$users = array(
    array(
        "user_name" =>"shahidbangash" ,
        "email" => "shahid@gmail.com" ,
        "password" => "12345678" ,
        "first_name"=>"Shahid" ,
        "last_name" => "Khan" ,
        "cnic" => "14142421412123412" ,
        "age" => "21",
        "relationship_status" =>"single" ,
        "gender"=>"male",
        "address" => "dhjashdkjs hsdjkashd" ,
        "permanent_address" => "djashdkjsa sjdhaks" ,
        "telephone" => "13123213123" , 
        "fax_number" => "2321312312",
        "mobile_number" => "1312321321321" ,
        "website_url" => "wwww.example.com/"),
        
        array(
            "user_name" =>"hafsahafsa" ,
            "email" => "hafsa@gmail.com" ,
            "password" => "12345678" ,
            "first_name"=>"hafsa" ,
            "last_name" => "Khan" ,
            "cnic" => "14142421412123412" ,
            "age" => "21",
            "relationship_status" =>"single" ,
            "gender"=>"female",
            "address" => "dhjashdkjs hsdjkashd" ,
            "permanent_address" => "djashdkjsa sjdhaks" ,
            "telephone" => "13123213123" , 
            "fax_number" => "2321312312",
            "mobile_number" => "1312321321321" ,
            "website_url" => "wwww.example.com/"
        ),
        
    );

    function search_username($id, $array) {
        foreach ($array as $key => $val) {
            if ($val['user_name'] === $id) {
                return "true";
            }
        }
        return "false";
    }

    

if (isset($_REQUEST['submit'])){

    echo 'success';

    // echo($username = $_REQUEST['usernamefield']);
    $email = $_REQUEST['emailfield'];
    $password = $_REQUEST['password'];
}
else{
    echo "NOt entered ";
}
    // $first_name = $_REQUEST['firstnamefield'];
    // $last_name = $_REQUEST['lastnamefield'];
    // $cnic = $_REQUEST['cnic'];
    // $age = $_REQUEST['age'];
    // $relationship_status = $_REQUEST['relationship'];
    // $gender = $_REQUEST['gender'];
    // $address = $_REQUEST['mailingfield'];
    // $permanent_address = $_REQUEST['addressfield'];
    // $telephone = $_REQUEST['Telephonefield'];
    // $fax_number = $_REQUEST['Faxfield'];
    // $mobile_number = $_REQUEST['mobilefield'];
    // $website_url = $_REQUEST['websitefield'];

    






?>