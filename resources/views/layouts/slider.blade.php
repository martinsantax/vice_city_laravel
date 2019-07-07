<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/style.css">
</head>
<body>


<div class="slideshow-container">

<div class="mySlides fade">
<!--  <div class="numbertext">1 / 3</div> -->
  <img src="../../image/slider.png" style="width:100%">
  <!-- <div class="text">Caption Text</div> -->
</div>

<div class="mySlides fade">
  <img src="../../image/slider2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <!--  <div class="numbertext">3 / 3</div> -->
  <img src="../../image/slider3.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script type="text/javascript" src="../js/index.js"></script>

</body>
</html>
