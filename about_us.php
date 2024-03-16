<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8" />
  <title>About Us - Sikah AL Madina</title> 
  <link rel="icon" href="img/dinner.png" type="image/x-icon">
</head>
<link href="css/about_us.css" rel="stylesheet">
<link href="scss/submit_btn.css" rel="stylesheet">
<script type="text/javascript" src="js/about_us.js"></script>
<?php
    include 'components/nav_bar.html'
?>
<div style= "height: 250px;"></div>

<div id = "contact_us_head">
    <h1>CONTACT US</H4>
</div>
<div class="container">
    <div id = "contacts" class = "row">
        <div id="map"  class = "col-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d79181.92458297093!2d55.21447556839204!3d25.156373200973494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1710580566302!5m2!1sen!2slk" width="850" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  <div class="col-md-2"> </div>
        </div>
        <div id= "contact" class="col-4 ">
            <h3>CONTACTS</h3>
            <p> EMAIL   :   xx@xx.com </p>
            <p> TEL     :   00 00000 </p>
            <p> MOBILE 1:   +971 00 000 0000/P>
            <p> MOBILE 2:   +971 00 000 0000 </p> 
            <h3>ADDRESS</h3>
            <P>0000, Somwhere, UAE</P>
        </div>
    </div>
</div>

<div class="container">
    <div id = "about_form" class = "row">
        <div class = "col-4">
            <input type = "text" id = "name" class="form-control" placeholder= "Name"><br>
            <input type = "email" id = "email" class="form-control" placeholder= "Email"><br>
            <input type = "text" id = "subject" class="form-control" placeholder= "Subject">
        </div>
        <div class = "col-8">
            <textarea rows="6" id = "message" class="form-control" placeholder= "Your Message"></textarea>
        </div>
    </div>
        
    <div class="block">
        <button id = "submit_btn" class="button success" onclick="reset(); "> Submit</button>
    </div>
</div>
<?php
    include 'components/footer.html'
?>
</html>

