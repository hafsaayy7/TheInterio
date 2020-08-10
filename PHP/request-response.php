<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
<?php include 'header.php';


if (isset($_POST['submit']) == true) {
    echo " i am in submit form";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // $phone = $_POST['budget'];

    $timeframe = $_POST['timeframe'];
    $budget = $_POST['budget'];

    // $service_name = $_POST['service_name_field'];
    // $service_detail = $_POST['service_request_field'];
    $requirements = $_POST['comments'];

    $connect = mysqli_connect("localhost", "root", "", "theinterior");

    // INSERT INTO `request`(`nam`, `email`, `phone-no`, `timeframe`, `budget`, `project-requirements`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
    $query = "INSERT INTO `request`(`name`, `email`, `phone-no`,`timeframe`,`budget` , `project-requirements`) VALUES ('$name', '$email', '$phone','$timeframe','$budget' , '$requirements')";
    mysqli_query($connect, $query);

    echo '<h3 class = "container">Thank You !! We have recieved Your request . Our team will contact you shortly</h3>';
} else {

    echo '<h3 class = "container">Thank You !!</h3>';
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