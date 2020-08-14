<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
<?php include 'header.php';

$connect = mysqli_connect("localhost", "root", "", "theinterior");
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$timeframe = $_POST['timeframe'];
$budget = $_POST['budget'];
$requirements = $_POST['comments'];

// getting all the data from request page using post request ... and insert it to database

$query = "INSERT INTO `theinterior`.`request`(`name`, `email`, `phone-no`,`timeframe`,`budget`,`project-requirements`) VALUES ('$name', '$email', '$phone','$timeframe','$budget' , '$requirements')";

if (mysqli_query($connect, $query)) {
    // display thank you message to user after inserting it to databse
    echo '<h2 class = "container" style =" margin:  auto ; font-size : 30px">Thank You !! We have recieved Your request . We will contact you shortly</h2>';
    // echo "Records inserted successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
?>

<html>

<body style=" display :flex ;  flex-direction: column;">
    <footer style="margin-top: auto;" id="footer" class="footer-1">
        <script>
            $('#footer').load('footer.html');
        </script>
    </footer>
</body>

</html>