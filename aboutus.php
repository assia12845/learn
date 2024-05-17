
<!DOCTYPE html>

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
    background-image: url("images/aboutus.jpg");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
 <style>

        /*  Page styles  */

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font: normal 14px/1.4 Arial, Helvetica, sans-serif;
        }

        .skrollr-desktop body {
            height:100% !important;
        }

        #skrollr-body {
            height:100%;
            overflow:visible;
            position:relative;
        }


        /*  Styles for this example */

        .dummy-content{
            padding: 150px 0;
            background: radial-gradient(white, #EEF6F9);
            color: #3FA564;
            font-size: 24px;
            height: 100vh;
            text-align: center;
        }

        .dummy-content h2{
            font-weight: normal;
        }


        .gallery{
            background-color: #fff;
            color: #221f51;
            font: normal 24px sans-serif;
            min-height: 300vh;
            text-align: center;
            overflow: hidden;
        }

        .scroll-pause{
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            padding-top: 20vh;
        }


        .scroll-pause .row{
            width: 200vw;
            height: 30vh;
            overflow: hidden;
        }

        .scroll-pause .row div{
            width: 11.5%;
            height: 90%;
            float: left;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            margin: 0.5%;
            border-radius: 10px;
        }

        .scroll-pause .row div:first-child{
            margin-left: 0.4%;
        }

        .scroll-pause .row div:last-child{
            margin-right: 0.4%;
        }



    </style>
<html lang="en">

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
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php"><span> Learn to Code</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          
          <li><a href="loginltc.php" >Log in</a></li>
          <li class="btn-trial"><a href="signupltc.php">Sign in</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <style>
        .heading
        {
            text-align: center;
            
        }
        .content
        {
            text-align: center;
            font-size: 15px;
            color: gray;
            margin-right: 400px;
            margin-left:400px;
            min-width: 200px;
            
        }
        @media only screen and (max-width: 800px) {
    .content {
                margin:0px;
    }
}
    </style>
    
    
    <div class="parallax"></div>

    <center><div class="heading"><h1>About us</h1></div></center><hr>
    <div class="content">
     Programming is a process, with 3 very important phases: Problem Identification and Solving Phase, Implementation Phase and Maintenance Phase. All three of them are important for computer programmers/software developers to be able to solve problems. A lot of developers would equate the programming process with only algorithm implementation, which is incorrect. Translating an algorithm into a programming language, which can then be compiled or interpreted and finally understood by a computer, is only a part of the programming process. In my humble opinion, it is also the easiest task.

In short, Computer Programming is a process by which you solve a problem.

In the modern world, with the amount of problems and their complexity increasing many fold, it is a tool to get solutions by carefully, pushing the repetitive tasks to the computer and thereby achieving “automation”, meanwhile still requiring input from programmers/software developers</div>
   <hr>
     <div class="parallax" style="background-image:url('images/aboutus2.jpg')"></div>

    <center><div class="heading"><h1>See yaa!</h1></div></center><hr>

    
    
<div id="skrollr-body">



  


    <div class="gallery"></div>

</div>

<div class="scroll-pause" data-anchor-target=".gallery" data-100p-top-top="transform:translateY(100%);" data-top-top="transform:translateY(0%)" data--150p-top-top="" data--300p-top-top="transform:translateY(-100%)">

    <div class="row" data-anchor-target=".gallery" data-top-top="transform: translateX(0%);" data--150p-top-top="transform: translateX(-50%);">
        <div style="background-image:url('images/course1.jpg');" ></div>

        <div style="background-image:url('images/course2.jpg');" ></div>

        <div style="background-image:url('images/course3.jpg');" ></div>

        <div style="background-image:url('images/course4.png');" ></div>

        <div style="background-image:url('images/course5.jpg');" ></div>

        <div style="background-image:url('images/course6.jpg');" ></div>

        <div style="background-image:url('images/course7.jpg');" ></div>

        <div style="background-image:url('images/course8.jpg');" ></div>
    </div>


    <div class="row" data-anchor-target=".gallery" data-top-top="transform: translateX(-50%);" data--150p-top-top="transform: translateX(0);">

        <div style="background-image:url('images/course9.png');" ></div>

        <div style="background-image:url('images/course10.png');" ></div>

        <div style="background-image:url('images/course11.png');" ></div>

        <div style="background-image:url('images/course13.png');" ></div>

        <div style="background-image:url('images/course14.png');" ></div>

        <div style="background-image:url('images/course15.jpg');" ></div>

        <div style="background-image:url('images/course16.png');" ></div>

        <div style="background-image:url('images/course1.jpg');" ></div>

    </div>

</div>

<script src="assets/skrollr.min.js"></script>

<script>
    skrollr.init();
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

  <!--/ Contact-->
  <!--Footer-->
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
      ©2024Learn To Code  All rights reserved
      <div class="credits">
        
        Designed by <a href="#link">our group AY</a>
      </div>
    </div>
  </footer>
  <!--/ Footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>


</html>
