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

        label {
            margin-left: 20px;
            width: 300px;
            display: inline-block;
            margin-right: 100px;
        }

        textarea {
            display: inline-block;
        }

        form {
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
                                <a class="nav-link" href="./home.php">Home
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
                                <a class="nav-link" href="/home.php">Log out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>


    <style>
        .sidemenu {
    background-color: #cee7ef;
    padding-top: 20px;
    padding-bottom: 50px;
    max-width: 360px;
    font-size: 16px;
}
.sidemenu li ,.sidemenu a{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    font-weight: 700;

    color: #007cb2;

    /* padding: 20px 10px; */
}
.heading-primary{
    font-size: 30px;
    padding: 0px 20px;
}

.content {
    padding-left: 50px;
}

p.lead {
    font-size: 18px;
    color: #007cb2;
    line-height: 1.6em;
    font-weight: 500;
    padding-bottom: 0;
    margin-bottom: 0.5rem;
}

body {
    font-family: 'Circular-Book', sans-serif;
    background-color: white;
    /* padding-top: 114px; */

    font-size: 16px;
}
.content p{
    margin :20px 0px;
}


    </style>



</head>

<body>

    <div class="container">

        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col-md-4 col-lg-4 sidemenu">
                        <aside class="sidebar" id="sidebar" data-plugin-sticky="" data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">

                            <h2 class="heading-primary">Hire Us</h2>

                            <ul>
                                
                                <li><a class="" href="../ContactFrom_v10\ContactFrom_v10\index.html">Request a call</a></li>
                                <li><a class=" " href="/estimate/">Request a free estimate</a></li>
                            </ul>

                        </aside>
                    </div>
                    <div class="col-md-8 col-lg-8 content">

                        <div class="row">
                            <div class="col">


                                <h5>Request a free estimate</h5>
                                <form action="#contactForm" method="post">
                                    <input type="hidden" name="submitForm" value="1">
                                    <p class="lead">Talk to us to learn more or to get your project started now!</p>

                                    <p>We'd love to hear more about your project and find out how we can best support you.</p>

                                    <p style="display:none;">If you can fill out this form, you have all the
                                        skills you need to update your own website! No programming, no HTML...</p>



                                    <div class="form-group">
                                        <label for="name"><h5>Your name</h5></label>
                                        <input type="text" class="form-control" id="name" name="name" value="" required pattern="^[a-zA-Z]{3,}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email"><h5>Your email</h5></label>
                                        <input type="text" class="form-control" id="email" name="email" value="" required pattern="^([a-zA-Z0-9]+)@([a-zA-Z]+)\.([a-zA-Z]{2,5})$">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone"><h5>Your phone number</h5></label>
                                        <input type="text" class="form-control" name="phone" id="phone" value="" required pattern="^(\(?\+?[0-9]*\)?)?[0-9_\- \(\)]*$">
                                    </div>

                                    <div class="form-group">
                                        <label for="timeframe"><h5>Your timeframe is</h5></label>

                                        <select name="timeframe" class="form-control" id="timeframe">
                                            <option value="">--- select ---</option>
                                            <option value=""></option>
                                            <option value="As soon as possible (rush job)">As soon as possible (rush job)</option>
                                            <option value="Within 1 week (rush job)">Within 1 week (rush job)</option>
                                            <option value="Within 2 weeks">Within 2 weeks</option>
                                            <option value="Within a month">Within a month</option>
                                            <option value="Sometime in the next few months">Sometime in the next few months</option>
                                            <option value="Sometime in the next year">Sometime in the next year</option>
                                            <option value="I'm not really sure">I'm not really sure</option>
                                        </select>

                                    </div>

                    

                                    <div class="form-group">
                                        <label for="budget"><h5>Your budget is</h5></label>
                                        <div class="input-group" required>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">$</div>
                                            </div>
                                            <input type="text" name="budget" id="budget" class="form-control" value="" required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="comments">
                                            <h5>Comments</h5> (Describe your project and requirements)</label>

                                        <textarea required rows="6" id="comments" class="form-control" name="comments"></textarea>
                                    </div>

                                    
                                    <br>
                                    <div><input type="submit" value="Submit Quote" class="btn btn-primary" id="request-free-quote-button"></div>

                                </form>
                                <p></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>

<?php

if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $phone = $_REQUEST['budget'];

    $timeframe = $_REQUEST['timeframe'];
    $budget = $_REQUEST['budget'];

    $service_name = $_REQUEST['service_name_field'];
    $service_detail = $_REQUEST['service_request_field'];
    $requirements = $_REQUEST['comments'];



    // echo "<h5>We will send quatation on your number</h5>";


    // Write your database insertion code here 

}


?>