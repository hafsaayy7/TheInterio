<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d40bc104d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    <title>Service request</title>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            overflow-x: hidden;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        p {
            margin-bottom: 0px;
            font-size: 15px;
            font-weight: 400;
            color: #7a7a7a;
            line-height: 30px;
        }

        .navbar-style {
            background-color: #121212;
            color: white;
            /* background: black; */
        }

        button {
            margin: 20px;
            width: 140px;
        }


        ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0px;
        }

        .navbar .navbar-brand h2 {
            color: #00cca3;
            text-transform: uppercase;
            font-size: 24px;
            font-weight: 900;
            -webkit-transition: all .3s ease 0s;
            -moz-transition: all .3s ease 0s;
            -o-transition: all .3s ease 0s;
            transition: all .3s ease 0s;
        }



        .order-heading,
        .tabcontent {
            margin: 20px;
            font-size: 24px;
        }

        .tabcontent p {
            margin: 10px 0px;
        }
    </style>



</head>

<body>

    <div class="container">

        <form action="service.php" method="POST">
            <label for="">Enter Service name </label>
            <input type="text" name="service_name_field">

            <label for="">Service details</label>
            <input type="text" name="service_request_field">

            <label for=""> Duration</label>
            <input type="number" name="no_of_days_field">

            <button class="btn btn-lg" type="submit">Submit</button>

        </form>

    </div>


</body>

</html>