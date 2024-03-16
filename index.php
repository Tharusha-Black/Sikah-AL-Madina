<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8" />
  <title>Home - Sikah AL Madina</title> 
  <link rel="icon" href="img/dinner.png" type="image/x-icon">
  <link href="css/body.css" rel="stylesheet">
</head>
<?php
    include 'components/nav_bar.html'
?>
<!-- coursel -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner h-75">
    <div class="carousel-item active">
      <img src="img/co1.jpg" class="d-block w-100" alt="0">
    </div>
    <div class="carousel-item">
      <img src="img/co2.jpg" class="d-block w-100" alt="1">
    </div>
    <div class="carousel-item">
      <img src="img/co3.jpg" class="d-block w-100" alt="2">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- end of corusel -->


<div id = "c_name">
<h2><p id = "c_name_p1">WELCOM TO THE THE SIKAH AL MADINA FOODSTUFF TRADING</p></h2>
    <P id = "c_name_p2">Tamara Foodstuff Trading has been established in a fast dynamic developing city, Dubai, United Arab Emirates.It develops local food items with high premium quality and registered trademark.</P>
</div>

<!-- Cards vision/mission -->
  <div id = "v_cards" class = "row"> 
    <div class="card border-0 " >
      <img src="img/vision.png" class="card-img-top" alt="..." style="width: 50px; height: 50px;">
      <div class="card-body">
      <h4>OUR VISION</h4>
        <p class="card-text">To be recognized as a pioneer leading supplier of food and beverages in the region for high quality and good value products while sustaining a unique excellent services to our customers.</p>
      </div>
    </div><br><br>
    <div class="card border-0" >
      <img src="img/mission.png" class="card-img-top" alt="..." style="width: 50px; height: 50px;">
      <div class="card-body">
        <h4>OUR MISSION</h4>
        <p class="card-text">To continually supply, develop, produce and market a range of nutritious and highly qualified products as required by the market. To adopt a safe and environment friendly work practices across our business. Engage, Develop and inspire our work force to excel.</p>
      </div>
    </div><br><br>
    <div class="card border-0">
      <img src="img/values.png" class="card-img-top" alt="..." style="width: 50px; height: 50px;">
      <div class="card-body">
        <h4>OUR VALUES</h4>
        <p class="card-text">Creativity, Innovation and High Quality in a progress working environment. Achievement and Success in different competitive fields. Honesty and integrity across all aspects of our business. Continuous improvement in all areas.</p>
      </div>
    </div><br><br>
  </div>
<!-- End of Cards vision/mission -->

<?php
    include 'components/footer.html'
?>
</html>