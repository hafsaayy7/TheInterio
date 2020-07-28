<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d40bc104d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    <title>Service request</title>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            overflow-x: hidden;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        p {
            margin-bottom: 0px;
            font-size: 15px;
            font-weight: 400;
            color: #7a7a7a;
            line-height: 30px;
        }

        .navbar-style {
            background-color: #121212;
            color: white;
            /* background: black; */
        }

        button {
            margin: 20px;
            width: 140px;
        }


        ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0px;
        }

        .navbar .navbar-brand h2 {
            color: #00cca3;
            text-transform: uppercase;
            font-size: 24px;
            font-weight: 900;
            -webkit-transition: all .3s ease 0s;
            -moz-transition: all .3s ease 0s;
            -o-transition: all .3s ease 0s;
            transition: all .3s ease 0s;
        }
        label{
            margin-left: 20px;
            width: 300px;
            display: inline-block;
            margin-right: 100px;
        }
        textarea{
            display: inline-block;
        }

        form{
            font-size: 30px;
            margin: 30px 0px;
        }
        

        .order-heading,
        .tabcontent {
            margin: 20px;
            font-size: 24px;
        }

        .tabcontent p {
            margin: 10px 0px;
        }
    </style>

    <div>
        <header class="container-fluid navbar-style">
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
                            <li class="nav-item">
                                <a class="nav-link" href="home.html">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="orders.php">My orders</a>
                            </li>
                            <li class="nav-item">
                                <a id="additional_service" class="nav-link" href="service.php">Additional service request</a>
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
    </div>



</head>

<body>

    <div class="container">

        <form action="service.php" method="POST" id ="service_request_id">
            <div>

                <label for="">Enter Service name </label>
                <input type="text" name="service_name_field">
            </div>
            <div>
                <label for="">Service details</label>
                <textarea rows="4" cols="22" name="service_request_field" form="service_request_id">
                </textarea>
            </div>

            <div>

                
                <label for=""> Duration</label>
                <input type="number" name="no_of_days_field">
            </div>

            <button class="btn btn-lg" type="submit">Submit</button>

        </form>

    </div>


</body>

</html>

<?php

if (isset($_REQUEST['submit'])){

    $service_name = $_REQUEST['service_name_field'];
    $service_detail = $_REQUEST['service_request_field'];
    $duration = $_REQUEST['no_of_days_field'];


    // Write your database insertion code here 

}


?>