<?php

$connect = mysqli_connect("localhost", "root", "", "theinterior");
// db connection



function get_blogpost($connect)
{
  $output = '';
  $count = 0;

  $result = mysqli_query($connect, "SELECT * FROM blog"); //this query will select list of all blog from db we have now 5 total blogs 

  while ($row = mysqli_fetch_array($result)) {

    // creating an html div to display blog in body section .. we are storing html elements in variable later on we will this function inside body tag

    $output .= '<div class="col-lg-6">
    <div class="blog-post">
      <div class="blog-thumb">
        <img src=' . $row['picture'] . '>
      </div>
      <div class="down-content">
        <span>Category</span>
        <a href="post-details.php?id=' . $row['id'] . '">
          <h4>' . $row['title'] . '</h4>
        </a>
        <ul class="post-info">
          <li><a href="#">Admin</a></li>
          
          <li><a href="#">' . $row['comments'] . '</a></li>
        </ul>
        <p>' . $row['discription'] . '</p>
        <div class="post-options">
          <div class="row">
            <div class="col-lg-12">
              <ul class="post-tags">
                <li><i class="fa fa-tags"></i></li>
                <li><a href="#">Hire interior designer</a>,</li>
                <li><a href="#">Hire us </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>';

    $count = $count + 1;
  }
  return $output;
}

function get_recent_post($connect)
{
  $output = '';
  $count = 0;

  $result = mysqli_query($connect, "SELECT * FROM blog ");

  while ($row = mysqli_fetch_array($result)) {


    $output .=  '   <li>
  <a href="post-details.php?id=' . $row['id'] . '">
  <h5> ' . $row['title'] . ' </h5>
  <span>May 31, 2020</span>
</a></li>';
    //store title and id of blog in variable and using it inside list of hml 
  }
  return $output;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://kit.fontawesome.com/d40bc104d7.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="../css/blog.css">
  <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>

  <title>Interior Blog Posts</title>

  <?php
  include 'header.php'
  // it will display header 
  ?>
</head>

<body>
  <!-- Banner Ends Here -->
  <section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="all-blog-posts">
            <div class="row">
              <!-- here php class will be used -->
              <?php echo get_blogpost($connect);
              ?>
              <div class="col-lg-12">
                <ul class="page-numbers">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li> <!-- bootstrap icon -->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="row">
              <div class="col-lg-12">
                <div class="sidebar-item recent-posts">
                  <div class="sidebar-heading">
                    <h2>Recent Posts</h2>
                  </div>
                  <div class="content">
                    <ul>
                      <!-- calling the function to get all blog title and id of blog and display it in list -->
                      <?php echo get_recent_post($connect); ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- using jquerry to load footer from footer.html -->
  <footer id="footer" class="footer-1">
    <script>
      $('#footer').load('footer.html');
    </script>
  </footer>
</body>

</html>