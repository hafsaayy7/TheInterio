
<html lang="en">

<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d40bc104d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    

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



        .order-heading,
        .tabcontent {
            margin: 20px;
            font-size: 24px;
        }

        .tabcontent p {
            margin: 10px 0px;
        }
    </style>
    <title>Orders</title>

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

<body class="">
    <div class="container">
        <h2 class="order-heading">Manage orders</h2>
        <div class="">
            <button class="tablink btn btn-lg" onclick="openPage('active_orders', this)">Active</button>
            <button class="tablink btn btn-lg" onclick="openPage('completed_orders', this)" id="defaultOpen">Completed</button>
            <button class="tablink btn btn-lg" onclick="openPage('cancelled_orders', this)">Cancelled</button>

        </div>
        <!-- <button class="tablink" onclick="openPage('About', this, 'orange')">About</button> -->

        <div id="active_orders" class="tabcontent">
            <h3>total orders number</h3>
            <p>Sorry You dont have any orders</p>
        </div>

        <div id="completed_orders" class="tabcontent">
            <h3>total number of completed orders</h3>
            <p>Sorry You dont have any completed orders</p>
        </div>

        <div id="cancelled_orders" class="tabcontent">
            <h3>total cancel orders</h3>
            <p>Sorry You dont have any cancelled orders</p>
        </div>

    </div>

    <script>
        function openPage(pageName, elmnt) {
            // Hide all elements with class="tabcontent" by default */
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Remove the background color of all tablinks/buttons
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "#00cca3";
            }

            // Show the specific tab content
            document.getElementById(pageName).style.display = "block";

            // Add the specific color to the button used to open the tab content
            elmnt.style.backgroundColor = '';
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

</body>

</html>