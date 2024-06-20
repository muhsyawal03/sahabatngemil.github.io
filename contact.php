<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Kontak</title>
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

        .contact_section {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .contact_taital {
            font-weight: bold;
            margin-top: -10px;
            margin-bottom: 20px;
        }

        .contact_form {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(121,41,125);
        }

        .form-control {
            margin-bottom: 20px;
            margin-left: 30px;
        }

        .btn-primary {
            background-color:  #c553ec;
            border-color: #ff00ff;
            margin-left: 300px;
        }

        .btn-primary:hover {
          background-color: #ff00ff;
          border-color: #363636;      
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
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Your custom JavaScript -->
    <script>
        $(document).ready(function() {
            // Function to show success message as a pop-up
            function showSuccessMessage() {
                alert("Pesan Anda telah berhasil terkirim!");
            }

            // Check if 'success' parameter is present in URL
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('success')) {
                showSuccessMessage(); // Show pop-up if success=true is in URL
            }
        });
    </script>
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
                        <li class="nav-item">
                            <a class="nav-link" href="alamat.php">Alamat</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Kontak</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- header section end -->

    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="contact_taital">Hubungi Kami</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="contact_form">
                    <form action="admin/process_form.php" method="POST">
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" required>
    </div>
    <div class="form-group">
        <label for="phone">No.Hp</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="No. Hp">
    </div>
    <div class="form-group">
        <label for="message">Pesan</label>
        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Pesan Anda" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->

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
