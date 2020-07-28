<html>

<head>
    <style>
        body {
            margin: 0;
            background: white;
            font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #00cca3;
        }
    </style>
</head>



<body>

    <?php
    $connection = mysqli_connect("localhost", "root", "");

    if (!$connection) {
        die('Could not connect: ' . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email =  $_POST['email'];
    $contact =  $_POST['phone'];
    $message =  $_POST['message'];

    $query = "INSERT INTO `theinterior`.`contact` (`name`, `email`, `contact`,`message`) VALUES ('$name', '$email', '$contact','$message')";
            mysqli_query($connection, $query);
            echo "<h1>Query submitted successfully!</h1>";
    ?>
</body>

</html>