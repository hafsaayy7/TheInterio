<?php

function debug_to_console($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "theinterior");

  // Initialize message variable
  $msg = "";

  debug_to_console("Test 1");

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	// $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
    $target = "images/".basename($image);
    
    $role = $_POST['role'];
    $name = $_POST['username'];

    debug_to_console($image);


    $sql = "INSERT INTO 'theinterior.team' VALUES ($name , $role , '$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
      debug_to_console("uploaded");
     
  	}else{
      $msg = "Failed to upload image";
      debug_to_console("Test");
  	}
  }
  // $result = mysqli_query($db, "SELECT * FROM images");
  // echo '$result';
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <!-- <?php
    // while ($row = mysqli_fetch_array($result)) {
    //   echo "<div id='img_div'>";
    //   	echo "<img src='images/".$row['image']."' >";
    //   	echo "<p>".$row['image_text']."</p>";
    //   echo "</div>";
    // }
  ?> -->
  <form method="POST" action="upload_image.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <input type="text" name = 'username' placeholder="write name here">
      <input type="text" placeholder="write role here" name = 'role'>
    
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>