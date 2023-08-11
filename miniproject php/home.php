<html>
    <head>
        <title>STUDENT'S HOSTEL GUIDE</title>
        <link rel="stylesheet" href="home.css"/>
    
    </head>
    <body>
        <div id="container">
            <div id="header">
          
            <span id="heading"><h1>STUDENT'S HOSTEL GUIDE</h1></span>
    </div>
         </div>
            <div class="topnav">
                <a href="home.php">HOME</a>
                <!-- <a href="RegComplaint.php">REGISTER COMPLAINTS</a> -->
                <a href="RegComplaint.php">STUDENT COMPLAINTS</a>
                <a href="admin.php">ADMIN</a>
                
              </div>
              <br>


<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img1.jpg" style="width:100% ;height:100%;" >
    <div class="text"><b>UNIVERSITY OF HYDERABAD</b></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img2.jpg" style="width:100%; height:100%;">
    <div class="text"><b>UNIVERSITY OF HYDERABAD</b></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img3.jpg" style="width:100%; height:100%;">
    <div class="text"></div>
  </div>
  
  

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
showSlides(slideIndex += n);
}

function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
let i;
let slides = document.getElementsByClassName("mySlides");
let dots = document.getElementsByClassName("dot");
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
            <div id="footer">
             <br>
             <br><b> Chief Warden</b>
              Tel: +91 40 2313 2505 / 06<br>
              Email:
              cwouoh@gmail.com
              cw@uohyd.ac.in




            </div>
        </div>




    </body>
</html>