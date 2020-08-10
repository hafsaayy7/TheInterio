<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d40bc104d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/blog.css">
    <!-- <link rel="stylesheet" href="../css/order.css"> -->
    <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>




 
    <title>Orders</title>


    <div>

        <nav class="navbar navbar-expand-lg navbar-style">
            <div class="container-fluid">
                <a  class="navbar-brand" href="index.html">
                    <h2>The Interiors<em>.</em></h2>
                </a>
                <button class="navbar-toggle ml-auto" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span style="font-size: 28px; color : #00cca3"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul id="navbar-div" class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="orders.php">My orders</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
  


<!-- 
    <div>

        <nav class="navbar navbar-expand-lg navbar-style">


            <a style="margin-left: 0; display: inline-block;" class="mr-auto navbar-brand" href="index.php">
                <h2>The Interiors<em>.</em></h2>
            </a>

            <button style="font-size: 5vw;" class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span style="color: #00cca3;" ><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></span>
            </button>


            <div class="collapse navbar-collapse ml-auto" id="navbarResponsive">

                <ul id="navbar-div" class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php">My orders</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Log out</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
 -->



</head>

<body style="display: flex; flex-direction: column; min-width: 100%;" class="">
    <div class="container">
        <h2 class="order-heading">Manage orders</h2>
        <div class="row">
            <div class="col-sm-12 col-md-12">

                <button class="tablink btn btn-lg" onclick="openPage('active_orders', this)">Active</button>
            <button class="tablink btn btn-lg" onclick="openPage('completed_orders', this)" id="defaultOpen">Completed</button>
            <button class="tablink btn btn-lg" onclick="openPage('cancelled_orders', this)">Cancelled</button>
        </div>
            
        </div>
        <!-- <button class="tablink" onclick="openPage('About', this, 'orange')">About</button> -->

        <div id="active_orders" class="tabcontent">
            <h3>total orders number</h3>
            <p>Sorry You dont have any orders</p>
            <!-- this is default structure  -->
            <!-- we will db query and rsult will be displayed using dom  -->
        </div>

        <div id="completed_orders" class="tabcontent">
            <h3>total number of completed orders</h3>
            <p>Sorry You dont have any completed orders</p>
            <!-- we will db query and rsult will be displayed using dom  -->
        </div>

        <div id="cancelled_orders" class="tabcontent">
            <h3>total cancel orders</h3>
            <p>Sorry You dont have any cancelled orders</p>
            <!-- we will db query and rsult will be displayed using dom  -->
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


    <footer style="margin-top: auto;" id="footer" class="footer-1">
        <script>
            $('#footer').load('footer.html');
        </script>
    </footer>

</body>




</html>