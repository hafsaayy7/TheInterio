<?php
// display header
include 'header.php'
?>

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


  <title>Blog Details</title>


</head>

<style>
  .blog-post p,
  .blog-post h2,
  .blog-post li,
  .blog-post img {
    margin: 20px 0px;
  }
  .blog-post h2 {
    color: #00cca3;
    font-size: 32px;
  }
</style>

<body style="display:flex; 
  flex-direction:column;">

  <?php

  $connect = mysqli_connect("localhost", "root", "", "theinterior"); //connect to db

  function get_recent_post($connect)
  {
    $output = '';
    $count = 0;

    $result = mysqli_query($connect, "SELECT * FROM blog"); //select all blog 

    while ($row = mysqli_fetch_array($result)) {

// creatinh html li and then using anchor tag to allow user to navigate to the blog details  
      $output .=  '   <li>
    <a href="post-details.php?id=' . $row['id'] . '">
    <h5> ' . $row['title'] . ' </h5>
    <span>May 31, 2020</span>
  </a></li>';
    }
    return $output;
  }


  function get_blogpost($connect)
  {
    $output = '';
    $count = 0;

    $id = $_GET['id']; //using id of blog through get request 

    $result = mysqli_query($connect, "SELECT * FROM blog WHERE id=$id"); // select a blog with specific id 

    while ($row = mysqli_fetch_array($result)) {

      // display a blog in html 

      $output .= '<div class="col-lg-8">
    <div class="blog-post">
      <div class="blog-thumb">
        <img style = "width: 100% ; height :500px;"  src=' . $row['picture'] . '>
      </div>
      <div class="down-content">
        <span>Category</span>
          <h2>' . $row['title'] . '</h2>
        <ul class="post-info">
          <li>Admin</li>
          <li><a href="#">' . $row['comments'] . '</a></li>
        </ul>
        <p >' . $row['discription'] . '</p>
        <p>' . $row['blog_detail'] . '</p>
        <div class="post-options">
          
        </div>
      </div>
    </div>
  </div>';

      $count = $count + 1;
    }


    return $output;
  }



  ?>


  <div class="container">
    <div class="row">

      <!-- result of detail blog post   -->
      <?php echo get_blogpost($connect); ?>  


      <!-- side bar to show recent articles/blogs -->
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item recent-posts">
                <div class="sidebar-heading">
                  <h2>Recent Posts</h2>
                </div>
                <div class="content">
                  <ul>
                    <!-- this function gets the list of all blog from db and display it in html list tag -->
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


<!-- Jquerry to load footer -->
  <footer style="margin-top: auto;" id="footer" class="footer-1">
    <script>
      $('#footer').load('footer.html');
    </script>
  </footer>

</body>