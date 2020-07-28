<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/d40bc104d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <link rel="stylesheet" href="./blog.css">
    <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>

    <title>Interio Blog Posts</title>

    <script>
        $(function() {
            $(".login_window_button").click(function() {
                $(".login_window_model").modal('show');
            });
            $(".login_window_model").modal({
                closable: true
            });
        });
        $(function() {
            $(".signup_window_button").click(function() {
                $(".signup_window_model").modal('show');
            });
            $(".signup_window_model").modal({
                closable: true
            });
        });
    </script>


</head>

<body>



    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg navbar-style">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <h2>The Interiors<em>.</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul id="navbar-div" class="navbar-nav ml-auto">
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="home.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="orders.php">My orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="service.php">Additional service request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link login_window_button" href="support.php">support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home.html">Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

</body>

</html>





<?php

$users = array(
    array(
        "user_name" => "shahidbangash",
        "email" => "shahid@gmail.com",
        "password" => "12345678",
        "first_name" => "Shahid",
        "last_name" => "Khan",
        "cnic" => "14142421412123412",
        "age" => "21",
        "relationship_status" => "single",
        "gender" => "male",
        "address" => "dhjashdkjs hsdjkashd",
        "permanent_address" => "djashdkjsa sjdhaks",
        "telephone" => "13123213123",
        "fax_number" => "2321312312",
        "mobile_number" => "1312321321321",
        "website_url" => "wwww.example.com/"
    ),

    array(
        "user_name" => "hafsahafsa",
        "email" => "hafsa@gmail.com",
        "password" => "12345678",
        "first_name" => "hafsa",
        "last_name" => "Khan",
        "cnic" => "14142421412123412",
        "age" => "21",
        "relationship_status" => "single",
        "gender" => "female",
        "address" => "dhjashdkjs hsdjkashd",
        "permanent_address" => "djashdkjsa sjdhaks",
        "telephone" => "13123213123",
        "fax_number" => "2321312312",
        "mobile_number" => "1312321321321",
        "website_url" => "wwww.example.com/"
    ),

);

function search_username($id, $array)
{
    foreach ($array as $key => $val) {
        if ($val['user_name'] === $id) {
            return "true";
        }
    }
    return "false";
}



if (isset($_REQUEST['submit'])) {

    echo 'success';

    // echo($username = $_REQUEST['usernamefield']);
    $email = $_REQUEST['emailfield'];
    $password = $_REQUEST['password'];
} else {
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