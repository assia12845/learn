<?php
	session_start();

	if($_SESSION["autoriser"]!="oui"){
		header("location:home.php");
		exit();
	}
?>
<style>
	@font-face{
	font-family:roboto;
	src:url("../fonts/roboto.ttf");
}
@font-face{
	font-family:garamond;
	src:url("../fonts/garamond.ttf");
}
*{
	font-family:roboto,sans-serif;
}
.h1title{
	font-weight:normal;
	border-bottom:solid 0.5px #000;
	margin:20px 0;
	padding-bottom:10px;
	display:flex;
	align-items:center;
	justify-content:space-between;
}
.label{
	margin-top:20px;
	margin-bottom:6px;
}
.label>span{
	color:#C00;
}
.zdt{
	border:solid 1px #AAA;
	padding:10px;
	outline:none;
	width:400px;
	font-size:12pt;
	box-sizing:border-box;
}
.submit{
	margin-top:40px;
	background-color:rgba(0,0,0,1);
	border-color:#000;
	color:#FFF;
	cursor:pointer;
	transition:all 0.3s ease;
}
.submit:hover{
	background-color:rgba(0,0,0,0.8);
}
.erreur{
	padding:10px;
	background-color:#C00;
	color:#FFF;
	margin-top:10px;
}
.ok{
	padding:10px;
	background-color:#0C0;
	color:#FFF;
	margin-top:20px;
}
.captcha{
	font-size:30pt;
	color:#CCC;
	font-family:garamond;
	border-bottom:solid 1px #EEE;
	width:400px;
}
.dcnx{
	display:inline-block;
	font-size:12pt;
	padding:10px 20px;
	background-color:#000;
	color:#FFF;
	text-decoration:none;
	border:solid 0.5px #000;
	transition:all 0.3s ease;
}
.dcnx:hover{
	background-color:#FFF;
	color:#000;
}
.esph1{
	text-align:center;
	margin-top:100px;
}
.insc{
	color:#0C0;
	text-decoration:none;
}
.insc:hover{
	text-decoration:underline;
}
.msg{
	background-color:#F8F8F8;
	padding:10px;
	width:400px;
	box-sizing:border-box;
}
.date{
	color:#AAA;
	font-size:12pt;
}
.label i{
	font-size:10pt;
	color:#AAA;
	display:block;
}
#ph_profil{
	display:block;
	margin:auto;
	width:200px;
	height:200px;
	border:solid 6px #CCC;
	border-radius:100%;
	display:flex;
	align-items: center;
	justify-content: center;
	transition:all 0.3s ease;
	cursor:pointer;
	background-size:cover;
	background-position:center center;
	background-color:#888;
}
#ph_profil:hover{
	transform:scale(1.1);
}
#ph_profil img{
	width:40%;
	filter:invert(1);
	opacity:0;
	transition:all 0.3s ease;
}
#ph_profil:hover img{
	opacity:1;
}
#inp_upload{
	display:none;
}
.erreur_photo{
	margin-bottom:20px;
}

</style>
<style>
    .mouse
    {
        transform: rotate(90deg);
        background-color: black;
    }
    .price-table:hover
    {
       box-shadow: 5px 5px 5px lightgrey, -5px 0px 5px lightgrey;
    }
   .modal-header
    {
        background-color:#5FCF80;
        
    }
    .mybutton {
  border-radius: 0px 40px 40px 0px;
  background-color: #5FCF80;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.mybutton span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.mybutton span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.mybutton:hover span {
  padding-right: 25px;
}

.mybutton:hover span:after {
  opacity: 1;
  right: 0;
}
    .parallax {
    /* The image used */
    background-image: url("aboutus.jpg");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>learntocode.com</title>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
		<?=$message?>
	 <form name="fo" method="post" action="" >
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php"><span> Learn to Code Bienvenue <?=$_SESSION["nomPrenom"]?></span></a>
      </div> 
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="aboutus.php">About us</a></li>
          <li><a href="logout.php" class="dcnx">Quitter la session</a><li>
          
        </ul>
      </div>
    </div>
  </nav>
      
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">Learn To Code</h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text">First you Learn ,then you remove the 'L'</p>
              <p class="small-text">An easy and organized way to explore the world of coding through the window of our website</p>
              <a href="#footer" class="btn get-quote">GIVE A SUGGESTION</a>
            </div>
            <a href="#feature" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Upcoming Workshop</h2>
          <p>Upcoming workshops specially for you <br> HURRY UP!</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-html5 color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor HTML5 Workshop</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-css3 color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor CSS3 Workshop</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-joomla color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor Joomla Workshop</h4>
            </div>
          </div>
            <br>
<!--            <input class="cta-2-form-submit-btn" value="See more..." type="submit" style="float: right">-->
            <button class="mybutton" style="float: right;"><span><a href="courses.php" style='text-decoration:none;color:white;'>More..</a></span></button>
        </div>
      </div>
    </div>
  </section>
  <footer id="footer" class="footer">
    <div class="container text-center">

      <h3>Suggestions Are Welcomed</h3>

      <form class="mc-trial row" action="review.php" method="get">
        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <div class=" controls">
            <input name="username" placeholder="Enter Your FullName" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <div class=" controls">
            <input name="comment" placeholder="Enter Your Suggestion" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="col-md-2 col-sm-4">
          <p>
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            <a data-target="#login" data-toggle="modal">Suggest this! </a></button>
          </p>
        </div>
        <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title" style="color:white;">Suggestion</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">your suggestion have been take in considaration</p>
           
          </div>
        </div>
      </div>

    </div>   
    </form>
      <!-- End newsletter-form -->
      <ul class="social-links">
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      ©2024 Learn To Code  All rights reserved
      <div class="credits">
        Designed by <a href="#link">our groupe AY</a>
      </div>
    </div>
  </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>