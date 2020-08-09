<?php
// include 'footer.php';
//index.php
$connect = mysqli_connect("localhost", "root", "", "theinterior");
function make_query($connect)
{
    $query = "SELECT * FROM images";
    $result = mysqli_query($connect, $query);
    return $result;
}

function make_slide_indicators($connect)
{
    $output = '';
    $count = 0;
    $result = make_query($connect);
    while ($row = mysqli_fetch_array($result)) {
        if ($count == 0) {
            $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="' . $count . '" class="active"></li>
   ';
        } else {
            $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="' . $count . '"></li>
   ';
        }
        $count = $count + 1;
    }
    return $output;
}

function make_slides($connect)
{
    $output = '';
    $count = 0;
    $result = make_query($connect);
    while ($row = mysqli_fetch_array($result)) {
        if ($count == 0) {
            $output .= '<div class="item active">';
        } else {
            $output .= '<div class="item">';
        }
        $output .= '
   <img   src="../images/' . $row["image"] . '" alt="' . $row["image_text"] . '" />

  </div>
  ';
        $count = $count + 1;
    }
    return $output;
}


function service_query($connect)
{
    $service_query_result = mysqli_query($connect, "SELECT * FROM services");
    $counter = 0;
    $service_output = '';

    while ($row = mysqli_fetch_array($service_query_result)) {
        $service_output .=   '
        <div class="col-lg-4 col-sm-12 col-md-6 feature_card">
        <div class="service-box">
            <div class="hexagon">
                <div class="inner">
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="media-body">
                ' . '<h4 class="media-heading ">' . $row['service'] . '</h4>' . '
            </div>
        </div>
    </div>';

        $counter = $counter + 1;
    }

    return $service_output;
}

function image_card($connect)
{
    $output = '';
    $count = 0;
    $result = mysqli_query($connect, "SELECT * FROM team");
    while ($row = mysqli_fetch_array($result)) {
        $output .= '<div class="card col-lg-3 col-sm-12 col-md-6 team-member">
        <div style="margin: 20px 0px">

            <img class="img-responsive" ' . 'src=' . '../images/' . $row['picture'] . ' style=min-width: 100%;>
        </div>
        <div class="text-center">' . '

            <h2>' . $row['name'] . '</h2>
            <p>' . $row['role'] . '</p>

        </div>
    </div>';

        $count = $count + 1;
    }
    return $output;
}

?>

<!-- <html lang="en"> -->

<head>
    <meta charset="UTF-8">
    <title>Interiors</title>
    <!-- Adding bootstrap -->
    <link type="text/css" href="..\css\home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d40bc104d7.js" crossorigin="anonymous"></script>
    <!--Adding font aswome icons CDN-->
    <script src="./slideshow.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>

    <script>
        var selected_button = '';

        $(function() {
            $(".login_window_button").click(function() {
                $(".login_window_model").modal('show');
                selected_button = "login";
            });
            $(".login_window_model").modal({
                closable: true
            });
        });
        $(function() {
            $(".signup_window_button").click(function() {
                $(".signup_window_model").modal('show');
                selected_button = "signup";
            });
            $(".signup_window_model").modal({
                closable: true
            });
        });
    </script>

</head>

<body>
    <div id="top_div">
        <div id="title-div">
            <h3>The Interiors</h3>
        </div>
        <div id="navbar-div">
            <li><a href="home.php">Home</a></li>
            <li><a href="service.php">Hire Us</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="#" class="login_window_button">Login</a></li>
            <li><a href="..\ContactFrom_v10\ContactFrom_v10\index.html">Contact</a></li>
        </div>
    </div>

    <div class="container-fluid ">

        <br />
        <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php echo make_slide_indicators($connect); ?>
            </ol>

            <div  class="carousel-inner" style ="max-height: 600px;">
                <?php echo make_slides($connect); ?>
            </div>
            <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>

    <!-- SLide show ends here -->


    <div class="claim_design">

        <div class="container">`
            <div class="row">
                <div class="col-sm-9">
                    <h2>BRIGHT the best Interior Designs</h2>
                    <p style="font-size: 16px; margin-bottom: 10px;">We believe detail is our success story. The insides of our kitchens are made of 100% pure material. This gives them the highest level of stability and resilience. High-quality material, outstanding kitchen design and innovative technologies ensure that Shaze’ will last a lifetime. The ingredients as well as material on which they are prepared all have key role to play in creating a thoroughly successful meal. Many different kitchen designs give you huge scope when choosing your kitchen design idea and you will want your kitchen to stay looking as good as the day it was installed.
                    </p>
                </div>
                <div class="col-sm-3 text-right">
                    <a class="btn btn-primary btn-lg" href="#pricing">Plans!</a>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <!-- OUr servces Start here -->

    <div id="services" class="section-header">
        <h2 class="section-title text-center">Our Services</h2>
        <p class="text-center">We Offer Complete Interior Design Consultancy with Turnkey Execution.</p>
    </div>

    <div class="container">

        <div class="row">


            <?php echo service_query($connect); ?>

            <!-- Service code result from db -->

        </div>

    </div>

    <!-- OUr services section ends here -->

    <!-- About Us Section starts here  -->

    <div class="section-header">
        <h2 id="about" class="section-title text-center">About Us</h2>
        <div class=" container text-center ml-auto">

            <svg width="250" height="30" xmlns="http://www.w3.org/2000/svg">
                <!-- <line class="text-center" x1="-50%" y1="0" x2="10%" y2="0" stroke="#05BA8E" /> -->
                <path d="M 10 10 L 300 10" stroke="#05BA8E" />

                <!-- If you do not specify the stroke
                    color the line will not be visible -->
            </svg>
        </div>
        <p id="about" class="container text-center">Theinteriors is a Islamabad based company dedicated to providing our clients with creative concepts, high quality interior design or kitchen design and flawless execution. We tailor each project to our client’s individual taste. We are a team of skilled interior designers in Islamabad and craftsmen. We pride ourselves on listening to our clients, working with them side-by-side, and paying fine attention to detail.

            In the kitchen every centimeter counts. You will find all you need to make your kitchen and home spaces completely luxurious. The combination of different materials could add a more contemporary look. the goal of our kitchen designers in Islamabad is to create end results that are as unique and wonderful as our clients..</p>
    </div>

    <div class="container section-header">

        <!-- Our group -->

        <div class="row">
            <div class="col-sm-6 wow" style="visibility: visible; animation-name: fadeInLeft;">
                <img class="img-responsive" src="../images\group of architect.jpg" alt="">
            </div>

            <div class="col-sm-6">
                <h3 class="column-title">Our Awesome Group</h3>
                <p>TheInterior was established 39 years ago offering basic corporate interior works. Since then we have expanded and diversified to cover all aspects of corporate design and finishing. Our client list includes government offices, embassies, leading multinational firms, banks, hotels, architects and consultancies. We offer a flexible approach to your business environment requirements and the provision of a quality and reliable service that places a premium on customer satisfaction and the maintenance of long-term relationships with our clients. IH offers a comprehensive range of commercial development & finishing services, full civil, electrical and build services, partitioning, flooring, ceilings and decoration that combine to deliver a first class package. Most of the works are carried out ‘in house’, through IH own directly employed divisions. This allows us to guarantee tight control over programmed schedules and quality of work. We feel certain that IH is capable of utilizing all skills and experience to create the complete and perfect business environment that you require</p>


                <a class="btn btn-color" href="#">Learn More</a>

            </div>
        </div>
    </div>
    <!-- About us Section ends here -->


    <!-- Team Section starts here -->


    <div class="container pricing-section section-header">
        <div class="text-center">
            <h3>Our Best Team</h3>
            <svg width="150" height="10" xmlns="http://www.w3.org/2000/svg">

                <path d="M 10 10 L 300 10" stroke="#05BA8E" />
            </svg>
            <p>Meet our best team</p>
        </div>
    </div>
    <div id="team" class="container price-card-container">
        <div class="row">
            <?php echo image_card($connect); ?>
        </div>

    </div>

    <!-- Team section ends here -->

    <!-- Pricing Section -->

    <div class="container pricing-section section-header">
        <div class="text-center">
            <h3>Our pricing</h3>
            <svg width="200" height="10" xmlns="http://www.w3.org/2000/svg">

                <path d="M 10 10 L 300 10" stroke="#05BA8E" />
            </svg>

        </div>

    </div>

    <!-- Pricing container -->

    <div class="container price-card-container">

        <div class="row">



            <div id="pricing" class="card col-lg-3 col-sm-12 col-md-6">
                <div class="text-center mr-auto ml-auto pricing">
                    <span>$40</span>
                </div>
                <div class="text-center">

                    <p>per month</p>
                    <h2>Basic</h2>
                    <p>Door design</p>
                    <p>Consultation</p>
                    <p>Garden design</p>


                    <p><button class="btn btn-lg">Order now</button></p>
                </div>
            </div>

            <div class="card col-lg-3 col-sm-12 col-md-6">
                <div class="text-center ml-auto mr-auto pricing">
                    <span>$100</span>
                </div>
                <div class="text-center">

                    <p>per month</p>
                    <h2>Silver</h2>

                    <p>floor design</p>
                    <p>Home design</p>
                    <p>Garden design</p>

                    <p><button class="btn btn-lg">Order now</button></p>
                </div>
            </div>
            <div class="card col-lg-3 col-sm-12 col-md-6">
                <div class="text-center ml-auto mr-auto pricing">
                    <span>$150</span>
                </div>
                <div class="text-center">

                    <p>per month</p>
                    <h2>Silver</h2>
                    <p>Home design</p>
                    <p>Garden design</p>
                    <p>Kitchen design</p>
                    <p><button class="btn btn-lg">Order now</button></p>
                </div>
            </div>

            <div class="card col-lg-3 col-sm-12 col-md-6">
                <div class="text-center ml-auto mr-auto pricing">
                    <span>$200</span>
                </div>

                <div class="text-center">


                    <p>per month</p>
                    <h2>Platinum</h2>

                    <p>Home design</p>
                    <p>Interior design</p>
                    <p>Exterior design</p>
                    <p><button class="btn btn-lg">Order now</button></p>
                </div>
            </div>

        </div>

    </div>

    <!-- Pricing container ends here  -->

    <footer id = "footer" class="footer-1">
    <script>
      $('#footer').load('footer.html');

    </script>
  </footer>


</body>

</html>



