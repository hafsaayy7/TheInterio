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
    $connection = mysqli_connect("localhost", "root", "" , "theinterior");

    if (!$connection) {
        die('Could not connect: ' . mysqli_connect_error());
    }

    $username = $_POST['usernamefield'];
    $email =  $_POST['emailfield'];
    $password =  $_POST['password'];
    $firstname =  $_POST['firstnamefield'];
    $lastname =  $_POST['lastnamefield'];

    // checking if username or email already exists

    $query="SELECT * FROM `theinterior`.`user` WHERE `username` = '$username'";

    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    // if username is available
    if ($row != null){
        echo "<h1>username exist!</h1>";
    }
    else {
        $query="SELECT * FROM `theinterior`.`user` WHERE `email` = '$email'";

        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);

        // if email is available
        if ($row != null) {
            echo "<h1>email exist!</h1>";
        }
        else {
            $query = "INSERT INTO `theinterior`.`user` (`username`, `email`, `password`,`firstname`,`lastname`) VALUES ('$username', '$email', '$password','$firstname','$lastname')";
            mysqli_query($connection, $query);
            header("Location: http://localhost/TheInterio/PHP/afterlogin.php?firstname=".$firstname.'&lastname='.$lastname);
            echo "<h1>Registered successfully!</h1>";
        }
    }
    ?>
</body>

</html>