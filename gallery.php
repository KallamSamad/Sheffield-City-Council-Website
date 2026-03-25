<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
    <title>Gallery</title>
</head>
<?php require_once "nav.php"?>
 
<body>
<div class="sandwich"> 
    <div class="grid">
    <div class="album1"><button class="albumbtn"><img src="Assets/Images/photo-album/student/SHU/sign.webp" height="200px">Student Album</button></div>
    <div class="album2"><button class="albumbtn"><img src="Assets/Images/photo-album/nature/peacegarden.webp" height="200px">Nature Album</button></div>
    <div class="album3"><button class="albumbtn"><img src="Assets/Images/photo-album/city/parkhill.webp" height="200px">City Album</button></div>
    <div class="album4"><button class="albumbtn"><div class="playcont"> <img class="play" src="Assets/Images/play.svg"><img src="Assets/Images/photo-album/video/video.png" style="fill: maroon;" height="200px" width="300px"></div>Video Album</button></div>
 

    <div class="studentalbum" style="display:block">
    <img class="studentimg" src="Assets/Images/photo-album/student/SHU/sign.webp">
    <img class="studentimg" src="Assets/Images/photo-album/student/SHU/owen.webp">
    <img class="studentimg" src="Assets/Images/photo-album/student/SHU/owen2.webp">
    <img class="studentimg" src="Assets/Images/photo-album/student/SHU/poem.webp">
    <img class="studentimg" src="Assets/Images/photo-album/student/UoS/campus.webp">
    <img class="studentimg" src="Assets/Images/photo-album/student/UoS/latin.webp">
    <img class="studentimg" src="Assets/Images/photo-album/student/UoS/sign.webp">
    <img class="studentimg" src="Assets/Images/photo-album/student/UoS/uosbuild.webp">
    </div>

</div>
</div>
 <?php require_once "footer.php" ?>
<script>
    
    const grid =document.querySelector(".grid");
    


    grid.addEventListener("click",function (){
    grid.style.display="none";
    

    })


</script>
</body>
 
</html>