<?php
	session_start();


?>
<!DOCTYPE html>

<style>
    
     @media screen and (max-width: 1000px) 
    {
    .coursecards {display:block;}
        .card{display: block;min-width: 300px;}
    
     }
    
     @media screen and (max-width: 1000px) 
    {
    #cform{min-width: 500px;}
        
    
     }
    
    
    
    
    
    
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
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 20%;
  
    float:left;
      margin:8px;
    
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.cardcontainer {
    padding: 2px 16px;
  
    
}



.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
    float: left;
    margin: 5px;
    margin-left: 50px;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
color:white;
}
    img
    {
        width: 100%;
        height: 150px;
    }
    
      #cform
        {
            display: none;
            position: absolute;
            top:-20px;
            left:500px
            
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
        <a class="navbar-brand" href="session.php"><span> Learn to Code Bienvenue <?=$_SESSION["nomPrenom"]?></span></a>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
    
<br>
    <br>
<br>
    
<script>
     function downloadPDF(courseName) {
        // Create an <a> element for downloading
        var downloadLink = document.createElement('a');
        // Generate the link to the PDF file (replace 'path_to_pdf' with the actual path to your PDF file)
        var pdfFilePath = 'courses/' + courseName + '.pdf';
        // Set the href attribute of the <a> element to the path of the PDF file
        downloadLink.href = pdfFilePath;
        // Specify that the download should occur instead of opening the file in the browser
        downloadLink.setAttribute('download', courseName + '.pdf');
        // Add the <a> element to the DOM (document)
        document.body.appendChild(downloadLink);
        // Simulate a click on the download link
        downloadLink.click();
        // Remove the <a> element from the DOM
        document.body.removeChild(downloadLink);
    }

    function showMessage(btnId) {
        // Extract the course name from the button id
        var courseName = btnId;
        // Call the downloadPDF function with the course name
        downloadPDF(courseName);
    }
</script>
   
 
    <div id="coursecards">
    

    <div class="card" >
    
  <img src="images/course1.jpg" alt="John" >
  <h1>Java Script</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button type="submit" id="javascript"  onClick='showMessage(this.id)'>Get your course</button></p>
</div>
   
    
    
    
    
    
    
     <div class="card" >
  <img src="images/course2.jpg" alt="John" >
  <h1>React JS</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button type="submit" id="reactjs"  onClick='showMessage(this.id)'>Get your course</button></p>
</div>
       <div class="card" id="coursecard">
  <img src="images/course3.jpg" alt="John" >
  <h1>Android</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
  <p><button type="submit" id="android"  onClick='showMessage(this.id)'>Get your course</button></p>
</div>
       <div class="card" >
  <img src="images/course5.jpg" alt="John" >
  <h1>JAVA</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button type="submit" id="java"  onClick='showMessage(this.id)'>Get your course</button></p>
</div>
    <br><br>
<!--    row2-->
        <div class="card" >
    
  <img src="images/course4.png" alt="John" >
  <h1>Angular JS</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button type="submit" id="angularjs"  onClick='showMessage(this.id)'>Get your course</button></p>
</div>
     <div class="card" >
  <img src="images/course5.png" alt="John" >
  <h1>C++</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button type="submit" id="c++"  onClick='showMessage(this.id)'>Get your course</button></p>
</div>
       <div class="card" >
  <img src="images/course6.jpg" alt="John" >
  <h1>Jade</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button type="submit" id="jade"  onClick='showMessage(this.id)'>Get your course</button></p>
</div>
       <div class="card" >
  <img src="images/course7.jpg" alt="John" >
  <h1>Boot Strap</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
      </div>
       <p><button type="submit" id="bootstrap"  onClick='showMessage(this.id)'>Get your course</button></p>
 </div>
    
    <br><br>
    
    
<!--row3-->
       <div class="card" >
    
  <img src="images/course8.jpg" alt="John" >
  <h1>PHP</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button type="submit" id="php"  onClick='showMessage(this.id)'>Get your course</button></p>
</div>
   
    
    
    
    
    
    
     <div class="card" >
  <img src="images/course9.png" alt="John" >
  <h1>Web UI</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button type="submit" id="web-ui"  onClick='showMessage(this.id)'>Get your course</button></p>
</div>
       <div class="card" id="coursecard">
  <img src="images/course10.png" alt="John" >
  <h1>Node JS</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
  <p><button type="submit" id="Nodejs"  onClick='showMessage(this.id)'>Get your course</button></p>
</div>
       <div class="card" >
  <img src="images/course11.png" alt="John" >
  <h1>Vue JS</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button type="submit" id="vue-js"  onClick='showMessage(this.id)'>Get your course</button></p>
</div>
    <br><br>
    
    
    
<!--    row4-->
       <div class="card" >
    
  <img src="images/course16.png" alt="John" >
  <h1>Maven</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button type="submit" id="maven"  onClick='showMessage(this.id)'>Get your course</button></p>
</div>
   
    
    
    
    
    
    
     <div class="card" >
  <img src="images/course15.jpg" alt="John" >
  <h1>Perl</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button type="submit" id="perl"  onClick='showMessage(this.id)'>Get your course</button></p>
</div>
       <div class="card" id="coursecard">
  <img src="images/course13.png" alt="John" >
  <h1>Chart JS</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
  <p><button type="submit" id="chart-js"  onClick='showMessage(this.id)'>Get your course</button></p>
</div>
       <div class="card" >
  <img src="images/course14.png" alt="John" >
  <h1>Mongo DB</h1>
  <p class="title">Start learning now </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button type="submit" id="mongodb"  onClick='showMessage(this.id)'>Get your course</button></p>
</div>
    <br><br>
    </div>
    
    </body>

</html>  
    
    
    
    
    
    