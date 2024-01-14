<!DOCTYPE html>
<html>

<head>
  <title>Gallary</title>
  <link rel="stylesheet" type="text/css" href="../css/gallary.css">
  <link rel="stylesheet" type="text/css" href="./style/footer&header.css">
  <script src="./myScript.js"></script>
</head>

<body>
  <?php
  include '../components/header.php'
  ?>

<div class = "full-img" id = "fullImgBox">
    <img src = "../images/gallary1.jpg" id ="fullImg">
    <span onclick="closeFullImg()">X</span>
</div>
<div class = "img-gallary">
  <img src = "../images/gallary1.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/gallary2.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/gallary3.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/gallary4.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/gallary5.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/gallary6.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/gallary7.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/gallary8.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/gallary9.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/gallary10.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/gallary11.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/gallary12.jpg" onclick="openFullImg(this.src)">




</div>

<?php
  include '../components/footer.php'
  ?>

<script>

      var fullImgBox = document.getElementsById("fullImgBox");
      var fullImg = document.getElementById("fullImg");

      function openFullImg(pic){
        fullImgBox.style.display="flex";
        fullImg.src = pic;
      }

      function openFullImg(pic){
        fullImgBox.style.display="none";
      }

</script>

</body>
</html>