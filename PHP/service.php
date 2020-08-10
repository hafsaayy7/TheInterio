<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d40bc104d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="..\css\home.css">
    <title>Service request</title>

    <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>

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

       

        .btn {
            margin: 20px;
            width: 140px;
            color: white ;
            background-color:  #00cca3 ;
            text-align: center;
        }


        ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0px;
        }
        label {
            margin-left: 20px;
            /* width: 300px; */
            display: inline-block;
            margin-right: 100px;
        }

        textarea {
            display: inline-block;
        }

        form {
            font-size: 30px;
            margin: 30px 0px;
        }


        .order-heading,
        .tabcontent {
            margin: 20px;
            font-size: 24px;
        }

        .tabcontent p {
            margin: 10px 0px;
        }
        .sidemenu {
            background-color: #cee7ef;
            padding-top: 20px;
            padding-bottom: 50px;
            max-width: 360px;
            font-size: 16px;
        }

        .sidemenu li,
        .sidemenu a {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            font-weight: 700;

            color: #007cb2;

            /* padding: 20px 10px; */
        }

        .heading-primary {
            font-size: 30px;
            padding: 0px 20px;
        }

        .content {
            padding-left: 50px;
        }

        p.lead {
            font-size: 18px;
            color: #007cb2;
            line-height: 1.6em;
            font-weight: 500;
            padding-bottom: 0;
            margin-bottom: 0.5rem;
        }

       

        .content p {
            margin: 20px 0px;
        }
    </style>

    <?php include 'header.php' ; ?>



</head>

<body style="display: flex; flex-direction: column;">

    <div class="container">

        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col-md-4 col-lg-4 sidemenu">
                        <aside class="sidebar" id="sidebar" data-plugin-sticky="" data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">

                            <h2 class="heading-primary">Hire Us</h2>
                            <ul>
                                <label for="contact">

                                    <li><a class="" href="contact.php">Request a call</a></li>
                                </label>
                               
                            </ul>

                        </aside>
                    </div>
                    <div class="col-md-8 col-lg-8 content">

                        <div class="row">
                            <div class="col">
                                <h1 style=" margin :20px 0px;">Request a free estimate</h1>
                                <form action="request-response.php" method="POST">
                                    <!-- <input type="hidden" name="submitForm" value="1"> -->
                                    <p class="lead">Talk to us to learn more or to get your project started now!</p>

                                    <p>We'd love to hear more about your project and find out how we can best support you.</p>

                                    <p style="display:none;">If you can fill out this form, you have all the
                                        skills you need to update your own website! No programming, no HTML...</p>
                                    <div class="form-group">
                                        <label for="name">
                                            <h5>Your name</h5>
                                        </label>
                                        <input type="text" class="form-control" id="name" name="name" value="" required pattern="^[a-zA-Z]{3,}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">
                                            <h5>Your email</h5>
                                        </label>
                                        <input type="text" class="form-control" id="email" name="email" value="" required pattern="^([a-zA-Z0-9]+)@([a-zA-Z]+)\.([a-zA-Z]{2,5})$">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">
                                            <h5>Your phone number</h5>
                                        </label>
                                        <input type="text" class="form-control" name="phone" id="phone" value="" required pattern="^(\(?\+?[0-9]*\)?)?[0-9_\- \(\)]*$">
                                    </div>

                                    <div class="form-group">
                                        <label for="timeframe">
                                            <h5>Your timeframe is</h5>
                                        </label>

                                        <select name="timeframe" class="form-control" id="timeframe">
                                            <option value="">--- select ---</option>
                                            <option value=""></option>
                                            <option value="As soon as possible (rush job)">As soon as possible (rush job)</option>
                                            <option value="Within 1 week (rush job)">Within 1 week (rush job)</option>
                                            <option value="Within 2 weeks">Within 2 weeks</option>
                                            <option value="Within a month">Within a month</option>
                                            <option value="Sometime in the next few months">Sometime in the next few months</option>
                                            <option value="Sometime in the next year">Sometime in the next year</option>
                                            <option value="I'm not really sure">I'm not really sure</option>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label for="budget">
                                            <h5>Your budget is</h5>
                                        </label>
                                        <div class="input-group" required>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">$</div>
                                            </div>
                                            <input type="text" name="budget" id="budget" class="form-control" value="" required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label  for="comments">
                                            <h2 style="display: block;" >  Describe your project and requirements  </h2>
                                        </label>

                                        <textarea required rows="6" id="comments" class="form-control" name="comments"></textarea>
                                    </div>


                                    <br>
                                    <div><input type="submit" value="Submit Quote" class="btn btn-lg" id="request-free-quote-button"></div>

                                </form>
                                <p></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <footer style="margin-top: auto;" id = "footer" class="footer-1">
    <script>
      $('#footer').load('footer.html');

    </script>
  </footer>


</body>


</body>

</html>

</html>

