<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Alamat</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <style>
        .header_bg {
            width: 100%;
            float: left;
            background-image: url("images/header-bg1.png");
            height: auto;
            background-size: 100%;
            background-repeat: no-repeat;
        }

        .navbar-brand img {
            width: auto;
            height: 60px;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding: 3px 10px;
            font-size: 17px;
            color: #a9a8a8;
            border-radius: 5px;
            text-transform: uppercase;
            margin-bottom: 20px;
}


        .alamat_taital {
            font-weight: bold;
            margin-top: 30px; /* Mengatur jarak dari atas */
            margin-bottom: -80px;
        }

        .alamat_section {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .alamat_section_2 {
            margin-top: 20px;
        }

        .alamat_taital_box {
            text-align: center;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(121,41,125);
        }

        .alamat_text {
            margin-bottom: 20px;
        }

        .map-container {
            height: 400px;
            width: 100%;
            margin-top: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(192,50,117);
            border-radius: 10px;
            overflow: hidden;
        }


        .footer_section {
            width: 100%;
            float: left;
            height: auto;
            background-image: url("images/bg1.png");
            background-size: 100% 100%;
            padding: 40px 0px 0px 0px;
        }

        .footer_text {
            width: 60%;
            margin: 10px auto;
            font-size: 16px;
            color: #fefefd;
            text-align: center;
            margin-left: -75px; 
        }

        .footer_social_icon {
            width: 100%;
            float: right;
            text-align: right;
        }

        .footer_social_icon ul {
            margin: 0px;
            padding: 0px;
            display: inline-block;
        }

        .footer_social_icon li {
            float: left;
        }

        .footer_social_icon li a {
            float: left;
            padding: 5px 10px;
            background-color: #fff;
            color: #f75b59;
            border-radius: 100%;
            font-size: 19px;
            margin-right: 5px;
            width: 44px;
            text-align: center;
            margin-top: 10px;
        }

        .footer_social_icon li a:hover {
            background-color: #ffffff;
            color: #363636;
        }
    </style>
</head>
<body>
    <div class="header_section header_bg">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html"><img src="images/logo1.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="alamat.php">Alamat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Kontak</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- header section end -->

    <!-- alamat section start -->
    <div class="alamat_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="alamat_taital">Alamat Kami</h1>
                </div>
            </div>
            <div class="alamat_section_2 layout_padding">
                <div class="alamat_taital_box">
                    <h2 class="alamat_taital_1">Alamat</h2>
                    <p class="alamat_text">
                        Jl. Perintis Kemerdekaan KM. 10, Tamalanrea Indah, Kec. Tamalanrea, Kota Makassar, Sulawesi Selatan 90245, Indonesia
                    </p>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.576627426217!2d119.48523727472094!3d-5.13860989628198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf1e1fce2cb2b1%3A0xe9df97aa49547e02!2sPondok%20Aprilia%20Unhas!5e0!3m2!1sen!2sid!4v1685000012345!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- alamat section end -->

    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <p class="footer_text">2024 Sahabat Ngemil <a href="#"> </a></p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="footer_social_icon">
                        <ul>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <style>
        .footer_social_icon ul li a i {
             color: purple; /* Mengubah warna ikon menjadi ungu */
        }

        .footer_social_icon ul li a i:hover {
            color: darkviolet; /* Mengubah warna ikon menjadi violet saat di-hover */
        }
    </style>
    <!-- footer section end -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
