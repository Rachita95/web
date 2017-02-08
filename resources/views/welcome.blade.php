<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Expertily</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        .main{
            padding: 40px;
            padding-top: 25px;
            width: 800px;
            background-color: #ffffff;
            margin-left: 30px;
        }

        .navbar-brand{
            padding-top: 0px;
            margin-right: 400px;
            padding-left: 12%;
        }
        nav{
           height: 60px;
            font-size: 13px;
            font-weight: bold;
            text-transform: uppercase;
            background-color: #ffffff;
        }
        footer{
            background-color: #343538;
            color: #f5f8fa;
            height: 500px;
        }
        body{
            background-color: #afd9ee;
        }
        .list{
            list-style: none;
            text-align: left;
            text-color:#ffffff;
        }
        .heading {
            text-align: left;
            margin-left: 40px;
        }
        .row a:link {color: #FFFFFF
        }

    </style>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                 <a class="navbar-brand" href="/">
                    <img alt="Brand" src="https://s23.postimg.org/aojndw9zf/Capture.png">
                </a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Find a Lawyer</a></li>
                <li><a href="/about">How it works</a></li>
                <li><a href="/contact">Contact Us</a></li>
                <li><a href="/contact">Services</a></li>


            </ul>
            <ul class="nav navbar-nav navbar-right" style="margin-right: 5%">
                <li style="margin-top: 17%;"><i class="fa fa-sign-in" aria-hidden="true"></i></li>
                <li><a href="/login">Log In</a></li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

@yield('content-header')

<div class="main">
@yield('content')
</div>
@yield('contact')

<footer>
    <hr>
    <div class="container text-center">
        <p style="text-align: left; margin-top: 20px; margin-left: 20px; margin-bottom: 40px;">The information provided on Expertily.com must not be treated as legal advise. Expertily.com is not an advertising service for Lawyers. Your use of this website is as per our <a href="#">Terms and Conditions</a></p>
        <div class="row">
        <div class="col-md-3">
            <h3 class="heading">Know More</h3>
            <ul class="list">
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact Us</a></li>
                <li><a href="/terms">Terms and Conditions</a></li>
                <li><a href="/privacy">Our Privacy Policy</a></li>
                <li><a href="/refund">Our Refund Policy</a></li>
            </ul>
        </div>

        <div class="col-md-3">
            <h3 class="heading">Knowlege base</h3>
            <ul class="list">
                <li><a href="/blog">Blog</a></li>
                <li><a href="/faq">FAQ</a></li>
            </ul>
        </div>

        <div class="col-md-3">
            <h3 class="heading">Get in Touch</h3>
            <ul class="list">
                <li><a href="/lawyer">find a Lawyer</a></li>
                <li><a href="/question">Ask a Question</a></li>
            </ul>
        </div>

        <div class="col-md-3">
            <h3 class="heading">For Professionals</h3>
            <ul class="list">
                <li><a href="/clients">Get More Clients</a></li>

            </ul>
        </div>
        </div>

        <hr>
        <ul class="list-inline">
            <li><a href="#"><i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a></li>
        </ul>

        <p>&copy; Copyright @ 2017</p>

    </div><!-- end Container-->


</footer>

</body>
</html>
