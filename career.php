<!DOCTYPE html>
<html>
<link href="css/body.css" rel="stylesheet">
<head>
<meta charset = "utf-8" />
  <title>Careers - Sikah AL Madina</title> 
  <link rel="icon" href="img/dinner.png" type="image/x-icon">
</head>
<link href="css/career.css" rel="stylesheet">
<link href="scss/submit_btn.css" rel="stylesheet">
<script type="text/javascript" src="js/career.js"></script>
<?php
    include 'components/nav_bar.html'
?>

<div style= "height: 250px;"></div>

<div id = "contact_us_head">
    <h1>Join With US</H4>
</div>
<div style= "height: 100px;"></div>
<div class="container">
    <div id = "about_form" class = "row">
        <div class = "col-4">
            <input type = "text" id = "name" class="form-control" placeholder= "Name"><br>
            <input type = "email" id = "email" class="form-control" placeholder= "Email"><br>
            <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number"><br>
            
            <input type="file" id ="cv" class="form-control" placeholder= "Upload Your Resume Here!"><br>
        </div>
        <div class = "col-8">
            <textarea rows="9" id = "message" class="form-control" placeholder= "Your Message"></textarea>
        </div>
    </div>
        
    <div class="block">
        <button id = "submit_btn" class="button success" onclick="reset(); "> Submit</button>
    </div>
</div>

<?php
    include 'components/footer.html'
?>
<html>
</script>