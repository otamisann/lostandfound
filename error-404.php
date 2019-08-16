<?php
include_once 'includes/conn.php';

echo '<br><div class="container"><div id="myalert" class="alert alert-dismissible collapse alert-success">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>Connected!</strong> Database connected.
</div></div>';
?>
<!DOCTYPE html>
<html lang="en">
<!-- Head starts here, styling etc. -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="images/logo.png">
    <title>Found 'em</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/ea47e0bdbf.js"></script>
    <!-- <link href="bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Lato|PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.css" />
    <link rel="stylesheet" href="style.css">

    <style>
        .body {
            font-family: 'Lato', sans-serif;

        }
    </style>
</head>
<!-- end of Head -->
<!-- Start of Body -->

<body style="background-color:white;">
    <!-- start here -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-weight:bold;">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Can't Found 'em</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fas fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse pt-b" id="navbarColor03">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Terms & Conditions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <!-- <li>
                                        <a class="nav-link" href="#"></a>
                                        <a class="nav-link" href="#"></a>
                                    </li> -->

                </ul>
            </div>
        </nav>
        <br>
        <br>
        <div class="container">
            <div class="row no-gutters">

                <div class="col-md-6">
                    <h1 style="font-size: 72px;color: rgb(46, 46, 46)">Error 404</h1>
                    <h3 style="color: rgb(46, 46, 46)">Page not found</h3>
                    <br>
                    <blockquote class="blockquote">
                        <p class="mb-0"><i class="fas fa-quote-left"></i> It's ironic that you cant FIND this page
                            lol.<i class="fas fa-quote-right"></i></p>
                        <footer class="blockquote-footer"> Develasdassdsdsdfsdoper</footer>
                    </blockquote>
                    <br>

                    <input type="button" class="btn btn-secondary shadow-lg p-3 mb-5 rounded" style="background-color: #28bfd8;" onclick="location.href='index.html'" value="Go back to Homepage" />
                    <br>
                </div>

                <div class="col-md-6">
                    <br>
                    <img src="https://avocode.com/static/images/microsites/zeplin-alternative/avoeater.png" alt="" style="max-width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <!-- end of container -->



</body>
<!-- end of Body -->
<!-- scripts here -->
<!-- custom js and cdn here -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
<script src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://bootswatch.com/_assets/js/custom.js"></script>
<script src="customjs.js"></script>
<script>
    $(function() {
        $('#myalert').show('fade');
        $('#myalert').delay('1500');
        $('#myalert').hide('fade');


    });
</script>
<!-- end of script -->

</html>