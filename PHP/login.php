<html>

<head>
    <style>
        body {
            margin: 0;
            background: white;
            font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #00cca3;
        }
    </style>
</head>

<body>
    <?php
    $connection = mysqli_connect("localhost", "root", "", "theinterior");

    if (!$connection) {
        die('Could not connect: ' . mysqli_connect_error());
    } else {


        $email = $_POST['email'];
        $password =  $_POST['password'];

        $query = "SELECT * FROM `user` WHERE `email` = '$email'";

        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);


        if ($row == null) {
            echo "<h1>Invalid user!</h1>";
        } elseif ($row['email'] == $email and $row['password'] == $password) {
            echo "<h1>Logged in successfully</h1>";
            $value = $row['firstname'] .'&lastname='.$row['lastname'];
            header("Location: http://localhost/TheInterio/PHP/afterlogin.php?firstname=".$value );
            exit();
        } else {
            echo "<h1>Invalid password</h1>";
        }
    }
    ?>
</body>

<script>
function abc(){
console.log("Blasdkawdkaw")
}
</script>

</html>