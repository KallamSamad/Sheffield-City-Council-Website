<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Sheffield</title>
</head>
<?php require_once "nav.php"?>
<body>
<div class="page"> 
<div class="sandwich">    
    <div class="header">
        <img class="logo" src="Assets/Images/Sheffield.jpg" alt="Logo of website">
        <h1>Welcome To Sheffield</h1>
        <img class="logo" src="Assets/Images/Sheffield.jpg" alt="Logo of website" height="30px" style="transform: scaleX(-1);">
    </div>
    <div class="steel">
        <h2>...so you want to move to the Steel City?</h2></div>
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="Assets/Images/meadowhall.jpg" class="d-block w-100" alt="An image of meadowhall">
            </div>
            <div class="carousel-item">
            <img src="Assets/Images/peakdistrict.jpg" class="d-block w-100" alt="Peaks">
            </div>
            <div class="carousel-item">
            <img src="Assets/Images/bramlane.jpg" class="d-block w-100" alt="Brahmall lane">
            </div>
            <div class="carousel-item">
            <img src="Assets/Images/arial.jpg" class="d-block w-100" alt="Arial shot of Sheffie;d">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
        </div>
 
     
</div> 
<?php require_once "footer.php"?>
</div>
 
</body>
</html>