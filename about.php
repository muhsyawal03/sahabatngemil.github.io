<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <style>
         /*--------------------------------------------------------------------- File Name: style.css ---------------------------------------------------------------------*/

         /* Import Files */
         @import url(animate.min.css);
         @import url(normalize.css);
         @import url(icomoon.css);
         @import url(css/font-awesome.min.css);
         @import url(meanmenu.css);
         @import url(owl.carousel.min.css);
         @import url(swiper.min.css);
         @import url(slick.css);
         @import url(jquery.fancybox.min.css);
         @import url(jquery-ui.css);
         @import url(nice-select.css);

         /* Skeleton */
         * {
             box-sizing: border-box !important;
             transition: ease all 0.5s;
         }

         html {
             scroll-behavior: smooth;
         }

         .navbar-brand img {
             width: auto;
             height: 60px;
         }

         body {
             color: #666666;
             font-size: 14px;
             font-family: 'Poppins', sans-serif;
             line-height: 1.80857;
             font-weight: normal;
             overflow-x: hidden;
         }

         a {
             color: #1f1f1f;
             text-decoration: none !important;
             outline: none !important;
             -webkit-transition: all .3s ease-in-out;
             -moz-transition: all .3s ease-in-out;
             -ms-transition: all .3s ease-in-out;
             -o-transition: all .3s ease-in-out;
             transition: all .3s ease-in-out;
         }

         h1, h2, h3, h4, h5, h6 {
             letter-spacing: 0;
             font-weight: normal;
             position: relative;
             padding: 0 0 10px 0;
             font-weight: normal;
             line-height: normal;
             color: #111111;
             margin: 0;
         }

         h1 {
             font-size: 24px;
         }

         h2 {
             font-size: 22px;
         }

         h3 {
             font-size: 18px;
         }

         h4 {
             font-size: 16px;
         }

         h5 {
             font-size: 14px;
         }

         h6 {
             font-size: 13px;
         }

         *,
         *::after,
         *::before {
             -webkit-box-sizing: border-box;
             -moz-box-sizing: border-box;
             box-sizing: border-box;
         }

         h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
             color: #212121;
             text-decoration: none !important;
             opacity: 1;
         }

         button:focus {
             outline: none;
         }

         ul, li, ol {
             margin: 0px;
             padding: 0px;
             list-style: none;
         }

         p {
             margin: 20px;
             font-weight: 300;
             font-size: 15px;
             line-height: 24px;
         }

         a {
             color: #222222;
             text-decoration: none;
             outline: none !important;
         }

         a, .btn {
             text-decoration: none !important;
             outline: none !important;
             -webkit-transition: all .3s ease-in-out;
             -moz-transition: all .3s ease-in-out;
             -ms-transition: all .3s ease-in-out;
             -o-transition: all .3s ease-in-out;
             transition: all .3s ease-in-out;
         }

         input:focus {
             outline: none !important;
         }

         ul, li, ol {
             margin: 0px;
             padding: 0px;
             list-style: none;
         }

         .container {
             max-width: 1200px;
             width: 100%;
             margin: auto;
             padding: 0px 15px;
         }

         button {
             outline: none !important;
         }

         .btn:focus {
             outline: none !important;
         }

         a:focus {
             outline: none !important;
         }

         .btn:focus, .btn:active:focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn.active.focus {
             outline: none !important;
         }

         .no_padding {
             padding: 0px;
             margin: 0px;
         }

         .custome_select select {
             font-size: 14px;
             color: #777;
             line-height: 28px;
             padding: 0 30px 0 10px;
             height: 34px;
             border-radius: 2px;
             outline: 0 none;
             background: #fff;
             width: 100%;
             border: 1px solid #efefef;
             cursor: pointer;
             font-family: 'Roboto', sans-serif;
             text-align: left;
         }

         .custome_select select:focus {
             border: 1px solid #d8d8d8;
         }

         .custome_select select option {
             padding: 5px 0;
         }

         /*--------------------------------------------------------------------- section css ---------------------------------------------------------------------*/

         /*--------------------------------------------------------------------- header section css ---------------------------------------------------------------------*/

         .header_bg {
    width: 100%;
    float: left;
    background-image: url("images/header-bg1.png");
    height: auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
         .header_section .navbar-light .navbar-nav .nav-link:hover,
         .header_section .navbar-light .navbar-nav .nav-link:focus,
         .header_section .navbar-light .navbar-nav .nav-link.active {

         }


    .navbar-expand-lg .navbar-nav .nav-link {
    padding: 3px 10px;
    font-size: 17px;
    color: #a9a8a8;
    border-radius: 5px;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.navbar-light .navbar-nav .nav-link:focus,
.navbar-light .navbar-nav .nav-link:hover {
    color: #4c4c4c;
}

.navbar-light .navbar-nav .active>.nav-link,
.navbar-light .navbar-nav .nav-link.active,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .show>.nav-link {
    color: #4c4c4c;
}

.navbar-brand {
    margin: 0px;
    float: right;
}

.navbar {
    padding: 15px 50px;
}


         /* Image position */
         .about_taital {
            font-weight: bold;
            margin-top: 20px; /* Mengatur jarak dari atas */
             
         }

         .about_section_2 {
             position: relative;
             padding: 50px 0;
         }

         .about_section_2 .about_img {
             width: 100%;
             height: auto;
             max-width: 500px;
         }

         .about_taital_box {
             position: absolute;
             top: 50%;
             left: 50%;
             transform: translate(-15%, -50%);
             text-align: center;
             background: rgba(255, 255, 255, 0.8);
             padding: 20px;
             border-radius: 10px;
         }

         .about_taital_1 {
             font-size: 24px;
             font-weight: 700;
             margin-bottom: 10px;
         }

         .about_text {
             font-size: 14px;
             line-height: 1.6;
         }

   /* footer section start */

.footer_section {
    width: 100%;
    float: left;
    height: auto;
    background-image: url("images/bg1.png");
    background-size: 100% 100%;
    padding: 40px 0px 0px 0px;
    margin-top: 60px;
}

.footer_text {
            width: 60%;
            margin: 10px auto;
            font-size: 16px;
            color: #fefefd;
            text-align: center;
            margin-left: -75px; 
        }

.padding_left_10 {
    padding-left: 10px;
}

.social_icon {
    width: 100%;
    display: inline-block;
    text-align: center;
    margin-top: 10px;
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

/* footer section end */
      </style>
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
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
                     <li class="nav-item active">
                        <a class="nav-link" href="about.php">About</a>
                     </li>
                     <li class="nav-item">
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
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">Tentang Kami</h1>
               </div>
            </div>
            <div class="about_section_2 layout_padding">
               <div class="image_iman"><img src="img/bg_shbt.png" class="about_img"></div>
               <div class="about_taital_box">
                  <h1 class="about_taital_1">Sahabat Ngemil</h1>
                  <p class="about_text">Sahabat Ngemil" adalah penjual camilan yang menawarkan berbagai jenis basreng dan keripik pisang. Meskipun merupakan produksi kecil, kami berkomitmen untuk menyediakan camilan yang lezat dan berkualitas. Basreng kami gurih dan renyah, sementara keripik pisang kami manis dan memuaskan.

Kami menggunakan bahan-bahan pilihan dan memproses setiap produk dengan cermat untuk memastikan rasa dan kualitas terbaik. "Sahabat Ngemil" hadir untuk menemani waktu santai Anda dengan camilan yang nikmat dan menggugah selera</p>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-sm-12">
                  <p class="footer_text">2024 Sahabat Ngemil <a href=" "> </a></p>
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
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
