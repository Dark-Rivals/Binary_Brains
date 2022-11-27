<?php
include_once 'create.php';
$conn = OpenCon();
$sql = "SELECT username FROM user" ;
$result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
  <body style="background-color:rgba(249, 249, 245, 0.301);"></body>
  <title>Home</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <style>
    

body {
  margin: 0;
  font-family: serif;
}

.navbar {
            display: flex;
            align-items: center;
            justify-content: center;
            position: sticky;
            top: 0;
            cursor: pointer;
        }
 
        .background {
            background: black;
            background-blend-mode: darken;
            background-size: cover;
        }
 
        .nav-list {
            width: 70%;
            display: flex;
            align-items: center;
        }
 
        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
        }
 
        .logo img {
            width: 180px;
            border-radius: 50px;
        }
 
        .nav-list li {
            list-style: none;
            padding: 26px 30px;
        }
 
        .nav-list li a {
            text-decoration: none;
            color: white;
        }
 
        .nav-list li a:hover {
            color: grey;
        }
 
        .rightnav {
            width: 30%;
            text-align: right;
        }
 
        #search {
            padding: 5px;
            font-size: 17px;
            border: 2px solid grey;
            border-radius: 9px;
        }
/* Slideshow container */
.slideshow-container {
  position: relative;
  background-image: url("https://www.designpitchdeck.com/blog/wp-content/uploads/2018/02/DPD-TEAM-01.jpg") ;
  
  background-position: 100px;
  background-color: 30px;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: left;
  color: rgb(11, 10, 10);
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
.textBox{
    border-bottom: 2px solid rgb(16, 14, 14);
    position: static;
    margin: 21px 30px;
}
.textBox input{
    background: none;
    border: none;
    outline: none;
    width: 100%;
    color: rgb(156, 155, 155);
    height: 30px;
    font-size: 20px;

}
.container {
  
  background-color: white;
  border-radius: 5px;
  padding: 16px;
  margin: 16px 0
}
@media (max-width: 500px) {
  .container {
      text-align: center;
  }
}
#comment-box, #post {
    
    margin-left: 30px,10px;
    border: black;
    border-radius: 15px;
}
#post:hover{
    background-color: rgb(30, 28, 28);
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}



.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

input[type=submit] {   

  width: 100%;
  background-color: #040404;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}

input[type=submit]:hover {
  background-color: #000100cb;
}
</style>
</head>
<body>
    <nav class="navbar background">
        <ul class="nav-list">
            <div class="logo">
                <img src= "SolveIT.png">
            </div>
            <li><a href="/maincode.html">Home</a></li>
            <li><a href="/test.html">Questions</a></li>
            <li><a href="#notyet">About</a></li>
            <div class="dropdown">
                <button class="dropbtn">More 
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="#">Choose your Company</a>
                  <a href="#">Trending Questions</a>
                  <a href="#">Choose your questions</a>
                </div>
        </ul>
 
        <div class="rightNav">
            
                </div>
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
            <div class="dropdown">
                <button class="dropbtn">
                 <?php
                  echo "ABC";
                 ?>
                   <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="#">Points - 686 </a>
                  <a href = "/login.html"> Logout </a> </a>
            
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


  
  <div class="slideshow-container">

    <div class="mySlides">
      <h2 STYLE="text-align: left;font-family:serif;">TRENDING QUESTION 1</h2>
      <p>What do you expect from modern technlogy?</p>
    </div>
    
    <div class="mySlides">
        <h2 STYLE="text-align: left;font-family:serif;">TRENDING QUESTION 2</h2>
        <p>What are your ideas in upbringing a falling economy?</p>
    </div>
    
    <div class="mySlides">
        <h2 STYLE="text-align: left;font-family:serif;">TRENDING QUESTION 3</h2>
        <p>What is the role of information technology in national security? </p>
    </div>
    
    <a class="prev" onclick="plusSlides(-1)"><<<</a>
    <a class="next" onclick="plusSlides(1)">>>></a>
    
    </div>
    
    <div class="dot-container">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    
   <br>
   <br>
   <br>
   <br>
   <br>

    <a href="test.html">  
        <input type="submit" value="Go To Questions"/>  
      </a>    


    <script src="code.js"></script>
    
    <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>
         



</body>
</html>