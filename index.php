<?php
require_once("include/db.php");

// Query to fetch data from posts table
$sql = "SELECT * FROM posts ORDER BY id DESC";
$result = $conn->query($sql);
?>

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
      <title>Sahabat Ngemil</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css --> 
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <style>
         /*--------------------------------------------------------------------- File Name: style.css ---------------------------------------------------------------------*/


/*--------------------------------------------------------------------- import Files ---------------------------------------------------------------------*/

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

/*--------------------------------------------------------------------- skeleton ---------------------------------------------------------------------*/

* {
    box-sizing: border-box !important;
    transition: ease all 0.5s;
}

html {
    scroll-behavior: smooth;
}

.navbar-brand img {
    width: auto; /* Menjaga aspek rasio */
    height: 70px; /* Ganti dengan tinggi yang diinginkan */
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

h1,
h2,
h3,
h4,
h5,
h6 {
    letter-spacing: 0;
    font-weight: normal;
    position: relative;
    padding: 0 0 10px 0;
    font-weight: normal;
    line-height: normal;
    color: #111111;
    margin: 0
}

h1 {
    font-size: 24px
}

h2 {
    font-size: 22px
}

h3 {
    font-size: 18px
}

h4 {
    font-size: 16px
}

h5 {
    font-size: 14px
}

h6 {
    font-size: 13px
}

*,
*::after,
*::before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
    color: #212121;
    text-decoration: none!important;
    opacity: 1
}

button:focus {
    outline: none;
}

ul,
li,
ol {
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

a,
.btn {
    text-decoration: none !important;
    outline: none !important;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

img {
    max-width: 100%;
    height: auto;
}

 :focus {
    outline: 0;
}

.paddind_bottom_0 {
    padding-bottom: 0 !important;
}

.btn-custom {
    margin-top: 20px;
    background-color: transparent !important;
    border: 2px solid #ddd;
    padding: 12px 40px;
    font-size: 16px;
}

.lead {
    font-size: 18px;
    line-height: 30px;
    color: #767676;
    margin: 0;
    padding: 0;
}

.form-control:focus {
    border-color: #ffffff !important;
    box-shadow: 0 0 0 .2rem rgba(255, 255, 255, .25);
}

.navbar-form input {
    border: none !important;
}

.badge {
    font-weight: 500;
}

blockquote {
    margin: 20px 0 20px;
    padding: 30px;
}

button {
    border: 0;
    margin: 0;
    padding: 0;
    cursor: pointer;
}

.full {
    float: left;
    width: 100%;
}

.layout_padding {
    padding-top: 100px;
    padding-bottom: 0px;
}

.padding_0 {
    padding: 0px;
}


/* header section start */

.header_section {
    width: 100%;
    float: left;
    background-image: url("images/banner-bg1.png");
    height: auto;
    background-size: 100%;
    background-repeat: no-repeat;
}

.header_bg {
    width: 100%;
    float: left;
    background-image: url("images/header-bg1.png");
    height: auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.header_bg .navbar-expand-lg .navbar-nav .nav-link {
    color: #ffffff;
}

.bg-light {
    background-color: transparent !important;
}

.mr-auto,
.mx-auto {
    margin: 0 auto;
    text-align: center;
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


/* header section end */

/* banner section start */

.banner_section {
    width: 100%;
    float: left;
    padding: 90px 0px 100px 0px;
}

 
.banner_taital_main {
    width: 100%;
    float: left;
    padding-top: 80px;
}

.banner_taital {
    width: 100%;
    font-size: 80px;
    color: #BF00FF;
    font-weight: 800;
    margin-top: -50px;
}

.tasty_text {
    width: 100%;
    float: left;
    font-size: 24px;
    color: #BF00FF;
    font-weight: bold;
}

.banner_text {
    width: 100%;
    float: left;
    font-size: 16px;
    color: #BF00FF;
    margin: 0px;
}

.btn_main {
    width: 100%;
    float: left;
    padding-top: 40px;
}

.about_bt {
    width: 175px;
    float: left;
}

.about_bt a {
    width: 100%;
    float: left;
    font-size: 18px;
    background-color:#BF00FF;
    color: #fefefd;
    text-align: center;
    padding: 12px;
    border-radius: 5px;
}

.about_bt a:hover {
    color: #fefefd;
    background-color: #4a4949;
}

.callnow_bt {
    width: 175px;
    float: left;
}

.callnow_bt a {
    width: 100%;
    float: left;
    font-size: 18px;
    background-color: #d48272;
    color: #fefefd;
    text-align: center;
    padding: 12px;
    margin-left: 10px;
    border-radius: 5px;
}

.callnow_bt a:hover {
    color: #fefefd;
    background-color: #4a4949;
}

.callnow_bt.active a {
    color: #fefefd;
    background-color: #4a4949;
}

#banner_slider a.carousel-control-prev {
    left: -120px;
    top: 455px;
}

#banner_slider a.carousel-control-next {
    right: 0px;
    top: 400px;
    left: -120px;
    color: #fefefd;
    background-color: #4a4949;
}

#banner_slider .carousel-control-next,
#banner_slider .carousel-control-prev {
    width: 55px;
    height: 55px;
    opacity: 1;
    font-size: 16px;
    color: #4a4949;
    background-color: #efefef;
}

#banner_slider .carousel-control-next:focus,
#banner_slider .carousel-control-next:hover,
#banner_slider .carousel-control-prev:focus,
#banner_slider .carousel-control-prev:hover {
    color: #fefefd;
    background-color: #4a4949;
}

.banner_img {
    width: 100%;
    float: left;
    text-align: center;
    margin-top: -50px;
}


/* banner section end */




 /* Produk start */
 .produk_section {
    width: 100%;
    float: left;
}

.produk_taital {
    width: 100%;
    float: left;
    font-size: 40px;
    color: #BF00FF;
    text-transform: uppercase;
    text-align: center;
    font-weight: bold;
    padding-bottom: 20px;
    margin-top: 80px;
}

.produk_section_2 {
    max-width: 90%;
    margin: 0 auto;
    text-align: center;
    padding-top: 40px;
}

.carousel {
    position: relative;
    display: flex;
    align-items: center;
}

.carousel-inner {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
}

.carousel-inner::-webkit-scrollbar {
    display: none; /* Hide scrollbar */
}

.post {
    flex: 0 0 25%;
    box-sizing: border-box;
    padding: 10px;
    background-color: #ffffff;
    margin-right: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease-in-out;
    scroll-snap-align: start;
}

.post:hover {
    transform: scale(1.05);
}

/* Post Title Styling */
.post h2 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color: #3b3b3b;
}

/* Post Content Styling */
.post p {
    font-size: 0.8rem;
    line-height: 1.5;
    margin-bottom: 15px;
    color: #666666;
}

/* Post Image Styling */
.post img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
}

/* Button Styling */
.read_bt a {
    display: inline-block;
    font-size: 16px;
    color: #BF00FF; /* Ungu */
    text-transform: uppercase;
    border-radius: 5px;
    border: 1px solid #BF00FF;
    padding: 8px 16px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.read_bt a:hover {
    color: #ffffff;
    background-color: #BF00FF; /* Ungu */
    border: 1px solid #BF00FF;
}

button.prev, button.next {
    background-color: #BF00FF;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 100;
}

button.prev {
    left: 0;
}

button.next {
    right: 0;
}

button.prev:hover, button.next:hover {
    background-color: #8e00cc;
}

 
#main_slider a.carousel-control-prev {
    left: -50px;
    top: 95px;
}

#main_slider a.carousel-control-next {
    right: -50px;
    top: 95px;
    color: #fefefd;
    background-color: #4a4949;
}

#main_slider .carousel-control-next,
#main_slider .carousel-control-prev {
    width: 55px;
    height: 55px;
    opacity: 1;
    font-size: 16px;
    color: #4a4949;
    background-color: #efefef;
}

#main_slider .carousel-control-next:focus,
#main_slider .carousel-control-next:hover,
#main_slider .carousel-control-prev:focus,
#main_slider .carousel-control-prev:hover {
    color: #fefefd;
    background-color: #4a4949;
}

/* Basic Carousel Styling */
#main_slider {
    overflow: hidden;
    position: relative;
}

.carousel-inner {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
}

.carousel-inner::-webkit-scrollbar {
    display: none; /* Hide scrollbar */
}

.post {
    flex: 0 0 auto;
    width: 25%; /* Adjust as needed */
    text-align: center;
    box-sizing: border-box;
    padding: 10px;
    background-color: #ffffff;
    margin-right: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
    scroll-snap-align: start;
}

.post:hover {
    transform: scale(1.05);
}

/* Post Title Styling */
.post h2 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color: #3b3b3b;
}

/* Post Content Styling */
.post p {
    font-size: 0.8rem;
    line-height: 1.5;
    margin-bottom: 15px;
    color: #666666;
}

/* Post Image Styling */
.post img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
}

/* Button Styling */
.read_bt a {
    display: inline-block;
    font-size: 16px;
    color: #BF00FF; /* Ungu */
    text-transform: uppercase;
    border-radius: 5px;
    border: 1px solid #BF00FF;
    padding: 8px 16px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.read_bt a:hover {
    color: #ffffff;
    background-color: #BF00FF; /* Ungu */
    border: 1px solid #BF00FF;
}

#main_slider a.carousel-control-prev {
    left: -50px;
    top: 95px;
}

#main_slider a.carousel-control-next {
    right: -50px;
    top: 95px;
    color: #fefefd;
    background-color: #4a4949;
}

#main_slider .carousel-control-next,
#main_slider .carousel-control-prev {
    width: 55px;
    height: 55px;
    opacity: 1;
    font-size: 16px;
    color: #4a4949;
    background-color: #efefef;
}

#main_slider .carousel-control-next:focus,
#main_slider .carousel-control-next:hover,
#main_slider .carousel-control-prev:focus,
#main_slider .carousel-control-prev:hover {
    color: #fefefd;
    background-color: #4a4949;
}

/* Basic Carousel Styling */
#main_slider {
    overflow: hidden;
    position: relative;
}

.carousel-inner {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
    scroll-behavior: smooth;
    padding: 20px 0;
}

.carousel-inner::-webkit-scrollbar {
    display: none; /* Hide scrollbar */
}

.post {
    flex: 0 0 25%; /* 4 posts per row */
    max-width: 25%; /* 4 posts per row */
    box-sizing: border-box;
    padding: 10px;
    text-align: center;
    background-color: #ffffff;
    margin: 0 5px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.post:hover {
    transform: scale(1.05);
}

/* Post Title Styling */
.post h2 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color: #3b3b3b;
}

/* Post Content Styling */
.post p {
    font-size: 0.8rem;
    line-height: 1.5;
    margin-bottom: 15px;
    color: #666666;
}

/* Post Image Styling */
.post img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
}

/* Button Styling */
.read_bt a {
    display: inline-block;
    font-size: 16px;
    color: #BF00FF; /* Ungu */
    text-transform: uppercase;
    border-radius: 5px;
    border: 1px solid #BF00FF;
    padding: 8px 16px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.read_bt a:hover {
    color: #ffffff;
    background-color: #BF00FF; /* Ungu */
    border: 1px solid #BF00FF;
}

/* Responsive Grid */
@media (max-width: 1200px) {
    .post {
        flex: 0 0 33.333%; /* 3 posts per row */
        max-width: 33.333%;
    }
}

@media (max-width: 992px) {
    .post {
        flex: 0 0 50%; /* 2 posts per row */
        max-width: 50%;
    }
}

@media (max-width: 768px) {
    .post {
        flex: 0 0 100%; /* 1 post per row */
        max-width: 100%;
    }
}

/* produk section end */


/* about section start */

.about_section {
    width: 100%;
    float: left;
    padding-bottom: 90px;
}

.about_section_2 {
    width: 100%;
    float: left;
    padding-top: 40px;
}

.about_taital {
    width: 100%;
    float: left;
    font-size: 40px;
    color: #BF00FF;
    text-transform: uppercase;
    text-align: center;
    font-weight: bold;
    padding-bottom: 0px;
    margin-top: -30px;
}

.about_taital_box {
    width: 500px;
    float: left;
    background-color: #ffffff;
    height: auto;
    padding: 40px 20px 30px 20px;
    box-shadow: 0px 0px 30px 0px;
    position: absolute;
    top: 1670px;
}

.image_iman {
    padding-left: 250px;
    position: relative;
}

.about_img {
    width: 100%;
}

.about_taital_1 {
    width: 100%;
    float: left;
    font-size: 30px;
    color: #3b3b3b;
}

.about_text {
    width: 100%;
    float: left;
    font-size: 16px;
    color: #232222;
    margin: 0px;
}

.readmore_btn {
    width: 170px;
    float: left;
    margin-top: 40px;
}

.readmore_btn a {
    width: 100%;
    float: left;
    font-size: 18px;
    color: #d78373;
    text-transform: uppercase;
    border-radius: 5px;
    border: 1px solid #fc947f;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
}

.readmore_btn a:hover {
    color: #4a4949;
    border: 1px solid #4a4949;
}


/* about section end */


/* contact section start */

.contact_section {
    width: 100%;
    float: left;
}

.contact_taital {
    width: 100%;
    float: left;
    font-size: 40px;
    color: #BF00FF;
    font-weight: bold;
    text-align: center;
    text-transform: uppercase;
}

.contact_section_2 {
    width: 100%;
    float: left;
    padding-top: 55px;
}

.padding_left_0 {
    padding-left: 0px;
}

.mail_section_1 {
    width: 50%;
    margin: 0 auto;
}

.mail_text {
    width: 100%;
    float: left;
    font-size: 16px;
    color: #2e2e2d;
    border: 0px;
    background-color: #efefef;
    padding: 11px 20px;
    margin-top: 20px;
    border-radius: 40px;
    font-family: 'Poppins', sans-serif;
}

input.mail_text::placeholder {
    color: #2e2e2d;
}

.massage-bt {
    color: #2e2e2d;
    width: 100%;
    height: 110px;
    font-size: 18px;
    background-color: #efefef;
    padding: 40px 20px 0px 20px;
    border: 0px;
    height: 110px;
    margin-top: 20px;
    border-radius: 40px;
    font-family: 'Poppins', sans-serif;
}

textarea#comment.massage-bt::placeholder {
    color: #2e2e2d;
}

.send_bt {
    width: 170px;
    margin: 0 auto;
    text-align: center;
}

.send_bt a {
    width: 100%;
    text-align: center;
    font-size: 16px;
    color: #fefefd;
    background-color: #BF00FF;
    padding: 10px;
    text-transform: uppercase;
    margin-top: 20px;
    margin-bottom: 20px;
    display: block;
    font-weight: bold;
    border-radius: 5px;
    font-family: 'Poppins', sans-serif;
}

.send_bt a:hover {
    color: #fefefd;
    background-color: #4a4949;
}

.map_main {
    width: 100%;
    float: left;
    margin-top: 90px;
}


/* contact section end */

        .carousel-item img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
        }
        .produk_taital {
            text-align: center;
            margin-bottom: 20px;
        }

/* footer section start */

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

.update_mail {
    color: #3b3b3b;
    width: 100%;
    height: 55px;
    font-size: 18px;
    padding: 10px 20px 0px 20px;
    background-color: #efefef;
    margin: 0 auto;
    justify-content: center;
    align-items: center;
    display: block;
    margin-top: 20px;
    border: 0px;
}

textarea#comment.update_mail::placeholder {
    color: #3b3b3b;
}

.form-group {
    margin-bottom: 1rem;
    display: flex;
    width: 50%;
    margin: 0 auto;
    text-align: center;
}

.subscribe_bt {
    width: 70px;
    float: left;
    padding-top: 20px;
}

.subscribe_bt a {
    width: 100%;
    float: left;
    color: #ffffff;
    font-size: 16px;
    padding: 13px 0px 14px 0px;
    background-color: #d07d6b;
    text-transform: uppercase;
    text-align: center;
}

.subscribe_bt a:hover {
    color: #363636;
    background-color: #d07d6b;
}


/* footer section end */


/* copyright section start */

.copyright_section {
    width: 100%;
    float: left;
    background-color: #d07d6b;
    height: auto;
}

.copyright_text {
    width: 100%;
    float: left;
    font-size: 16px;
    color: #ffffff;
    text-align: center;
    margin-left: 0px;
    font-family: 'Poppins', sans-serif;
}

.copyright_text a {
    color: #ffffff;
}

.copyright_text a:hover {
    color: #363636;
}


/* copyright section end */

.margin_top90 {
    margin-top: 90px;
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
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.php"><img src="images/logo1.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
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
         <!-- banner section start --> 
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img1.png"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Shbt Ngml</h1>
                                 <h5 class="tasty_text">Sahabat Mahasiswa</h5>
                                 <p class="banner_text">Ngemil asik, Enak, bersama Sahabat Ngemil..Asikin aja </p>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="about.php">Tentang kami</a></div>
                                    <div class="callnow_bt active"><a href="https://wa.me/6285656034604">Kontak kami</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img1.png"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                              <h1 class="banner_taital">Shbt Ngml</h1>
                                 <h5 class="tasty_text">Sahabat Mahasiswa</h5>
                                 <p class="banner_text">Ngemil asik, Enak, bersama Sahabat Ngemil..Asikin aja </p>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="about.php">Tentang kami</a></div>
                                    <div class="callnow_bt active"><a href="https://wa.me/6285656034604">Kontak kami</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img1.png"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                              <h1 class="banner_taital">Shbt Ngml</h1>
                                 <h5 class="tasty_text">Sahabat Mahasiswa</h5>
                                 <p class="banner_text">Ngemil asik, Enak, bersama Sahabat Ngemil..Asikin aja </p>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="about.php">Tentang kami</a></div>
                                    <div class="callnow_bt active"><a href="https://wa.me/6285656034604">Kontak kami</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                
            </div>
         </div>
      </div>
      <!-- header section end -->

     <!-- produk section start -->
     <div class="produk_section">
    <div class="container">
        <div class="row">
            <h1 class="produk_taital">PRODUK</h1>
        </div>
    </div>
    <div class="produk_section_2">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner post-container">
                <?php
                if ($result === false) {
                    echo "Error: " . $conn->error;
                } else {
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='post'>";
                            echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
                            echo "<p>" . htmlspecialchars($row['content']) . "</p>";
                            if (!empty($row['image'])) {
                                echo "<img src=' " . htmlspecialchars($row['image']) . "' alt='Image' />";
                            }
                            echo '<div class="read_bt"><a href="https://wa.me/6285656034604">PESAN SEKARANG</a></div>';
                            echo "</div>";
                        }
                    } else {
                        echo "0 results";
                    }
                }
                $conn->close();
                ?>
                </div>
        
        </div>
        </div>
    </div>
</div>
<script>
    function scrollLeft() {
    document.getElementById('carousel-container').scrollBy({
        left: -300,
        behavior: 'smooth'
    });
}

function scrollRight() {
    document.getElementById('carousel-container').scrollBy({
        left: 300,
        behavior: 'smooth'
    });
}

</script>

      <!-- produk section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">Tentang Sahabat Ngemil</h1>
               </div>
            </div>
            <div class="about_section_2 layout_padding">
               <div class="image_iman"><img src="img/bg_shbt.png" class="about_img"></div>
               <div class="about_taital_box">
                  <h1 class="about_taital_1">Sahabat Ngemil</h1>
                  <p class="about_text">"Sahabat Ngemil" adalah penjual camilan yang menawarkan berbagai jenis basreng dan keripik pisang. Meskipun merupakan produksi kecil, kami berkomitmen untuk menyediakan camilan yang lezat dan berkualitas. Basreng kami gurih dan renyah, sementara keripik pisang kami manis dan memuaskan.

Kami menggunakan bahan-bahan pilihan dan memproses setiap produk dengan cermat untuk memastikan rasa dan kualitas terbaik. "Sahabat Ngemil" hadir untuk menemani waktu santai Anda dengan camilan yang nikmat dan menggugah selera</p>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Hubungi Kami</h1>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="contact_section_2">
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
                <style>
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

        .label {
    float: left; /* Mengatur agar elemen label berada di sebelah kiri */
    margin-right: 10px; /* Memberikan margin kanan agar terpisah dari elemen lain */
}
        .form-control {
            margin-bottom: 10px;
            margin-left: 30px;
        }

        .btn-primary {
            background-color:  #c553ec;
            border-color: #ff00ff;
            margin-left: 630px;
        }

        .btn-primary:hover {
          background-color: #ff00ff;
          border-color: #363636;      
         }
                </style>
    <div class="form-group">
        <label for="message">Pesan</label>
        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Pesan Anda" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>
            </div>
         </div>
      </div>
      <!-- contact section end -->
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
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $('.carousel').carousel({
        interval: 3000 // 3 seconds
    });
</script>
   </body>
</html>
