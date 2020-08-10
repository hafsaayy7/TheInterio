<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/d40bc104d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/blog.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>

    <title>Interio Blog Posts</title>



</head>

<body style="display: flex; flex-direction: column; min-height: 100%;">



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


    <div>
        <?php
        $firstname = $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];


        echo "<h2> Welcome  " . $firstname . ' ' . $lastname . ' </h2>';
        ?>
    </div>



</body>

<footer style="margin-top: auto;" id="footer" class="footer-1">
    <script>
        $('#footer').load('footer.html');
    </script>
</footer>

</body>


</html>