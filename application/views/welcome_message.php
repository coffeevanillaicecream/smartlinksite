<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Basic Company Template for Bootstrap 3</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'css/bootstrap.css'; ?>" rel="stylesheet">

    <!-- Custom CSS for the 'Business Frontpage' Template -->
    <link href="<?php echo base_url().'css/business-frontpage.css'; ?>" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>">Smart Link</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url('welcome/aboutus');?>">About Us</a>
                    </li>
                    <li><a href="#services">Services</a>
                    </li>
                    <li><a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="business-header" img>

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- The background image is set in the custom CSS -->
                    <h1 class="tagline"></h1>
                </div>
            </div>

        </div>

    </div>

    <div class="container">

        <hr>

        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <h2>What We Do</h2>
                <p>We provide high speed Internet access via Satellite / Fiber Optics
                Satellite TV / Visual Surveillance System 
                </p>
                <p><a class="btn btn-default btn-large" href="#">Call to action &raquo;</a>
                </p>
            </div>
            <div class="col-lg-4 col-sm-4">
                <h2>Contact Us</h2>
                <address>
                    <strong>SMARTLINK TECHNOLOGIES AND BUSINESS SOLUTIONS CO.</strong>
                    <br>507 Prince John Condo 291 P. Tuazon corner 18th Ave. San. Roque, QC.
                    <br>Manila, Philippines
                    <br>
                </address>
                <address>
                    <abbr title="Tel./fax">Phone Number & Fax:</abbr> (02)5175989 & (02)703-9685
                    <br>
                    <abbr title="Mobile">Mobile:</abbr> 0908-1567581   
                    <br>
                    <abbr title="Email">Email:</abbr> <a href="mailto:#">greatwaylink@gmail.com</a>
                </address>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <img class="img-circle img-responsive" src="<?php echo base_url().'img/wifi.png';?>">
                <h2>Wireless ISP</h2>
                <p>Wireless Internet Service Providers (WISPs) are Internet service providers with networks built around wireless networking</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive text-center" src="<?php echo base_url().'img/cable.png';?>">
                <h2>Cable</h2>
                <p>Quality Streaming and Wide varieties of Channels</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive" src="<?php echo base_url().'img/cctv.png';?>">
                <h2>CCTV</h2>
                <p>Secure the place with a surveilance</p>
            </div>
        </div>

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; SMARTLINK TECHNOLOGIES AND BUSINESS SOLUTIONS CO. 2013</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /container -->


    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
