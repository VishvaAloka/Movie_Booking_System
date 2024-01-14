<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="../css/home.css">
  <link rel="stylesheet" type="text/css" href="./style/footer&header.css">
  <script src="./myScript.js"></script>
</head>

<body>
  <?php
  include '../components/header.php'
  ?>
  <div class="slider">
        <figure>
            <div class="slide">
                <!-- <p>Image one</p>-->
                <img src="../images/Sonic 2.jpg">
            </div>

            <div class="slide">
                <!-- <p>Image one</p>-->
                <img src="../images/Batman.jpg">
            </div>

            <div class="slide">
                <!-- <p>Image one</p>-->
                <img src="../images/Tiger 3.jpg">
            </div>

            <div class="slide">
                <!-- <p>Image one</p>-->
                <img src="../images/Pathaan.jpg">
            </div>

            <div class="slide">
                <!-- <p>Image one</p>-->
                <img src="../images/Ganapath.jpg">
            </div>
        </figure>
  </div>


  <br>
  <div class="promotions-container">
    <div class="promotion">
      <img src="../images/Animal.jpg" alt="Promotion 1">
    </div>
    <div class="promotion">
      <img src="../images/Jawan.jpg" alt="Promotion 2">
    </div>
  </div>

  <div class="smoke">
    <section class="features">
      <div class="feature-item">
        <img src="../images/venom.jpg" alt="Rooms">
      </div>
      <div class="feature-item">
        <img src="../images/Transformers.jpg" alt="Halls">
      </div>
      <div class="feature-item">
        <img src="../images/123.jpg" alt="Halls">
      </div>
    </section>
  </div>


  <?php
  include '../components/footer.php'
  ?>
</body>

</html>