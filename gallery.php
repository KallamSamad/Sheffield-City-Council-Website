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
    <div class="album1"><button class="albumbtn"><img class="imground" src="Assets/Images/photo-album/student/SHU/sign.webp" height="200px">Student Album</button></div>
    <div class="album2"><button class="albumbtn"><img class="imground"  src="Assets/Images/photo-album/nature/peacegarden.webp" height="200px">Nature Album</button></div>
    <div class="album3"><button class="albumbtn"><img class="imground"  src="Assets/Images/photo-album/city/parkhill.webp" height="200px">City Album</button></div>
    <div class="album4"><button class="albumbtn"><div class="playcont"> <img class="play" src="Assets/Images/play.svg"><img class="imground" src="Assets/Images/photo-album/video/video.png" style="fill: maroon;" height="200px" width="300px"></div>Video Album</button></div>
    </div>

    <div class="studentalbum" style="display:none">
    <img class="studentimg" src="Assets/Images/photo-album/student/SHU/sign.webp">
    <img class="studentimg" src="Assets/Images/photo-album/student/SHU/owen.webp">
    <img class="studentimg" src="Assets/Images/photo-album/student/SHU/owen2.webp">
    <img class="studentimg" src="Assets/Images/photo-album/student/SHU/poem.webp">
    <img class="studentimg" src="Assets/Images/photo-album/student/UoS/campus.webp">
    <img class="studentimg" src="Assets/Images/photo-album/student/UoS/latin.webp">
    <img class="studentimg" src="Assets/Images/photo-album/student/UoS/sign.webp">
    <img class="studentimg" src="Assets/Images/photo-album/student/UoS/uosbuild.webp">
    </div>


    <div class="cityalbum" style="display:none">
    <img class="cityimg" src="Assets/Images/photo-album/city/center.webp">
    <img class="cityimg" src="Assets/Images/photo-album/city/lightup.webp">
    <img class="cityimg" src="Assets/Images/photo-album/city/lightup2.webp">
    <img class="cityimg" src="Assets/Images/photo-album/city/parkhill.webp">
    <img class="cityimg" src="Assets/Images/arial.jpg">
    <img class="cityimg" src="Assets/Images/sheffield.jpg">
    <img class="cityimg" src="Assets/Images/xmasmark1.jpg">
    </div>



        <div class="naturealbum" style="display:none">
    <img class="studentimg" src="Assets/Images/photo-album/nature/norfolkheritage.webp">
    <img class="studentimg" src="Assets/Images/photo-album/nature/peacegarden.webp">
    <img class="studentimg" src="Assets/Images/photo-album/nature/rivelin.webp">
    <img class="studentimg" src="Assets/Images/photo-album/nature/sheffpark.webp">
    <img class="studentimg" src="Assets/Images/peakdistrict.jpg">

    </div>


        <div class="videoalbum" style="display:none">
        <video class="studentimg" controls><source src="Assets/Images/video/1.mp4" type="video/mp4"></source></video>
        <video class="studentimg" controls><source src="Assets/Images/video/2.mp4" type="video/mp4" ></source></video>
        <video class="studentimg" controls><source src="Assets/Images/video/3.mp4" type="video/mp4"></source></video>
        <video class="studentimg" controls><source src="Assets/Images/video/4.mp4" type="video/mp4"></source></video>
        <video class="studentimg" controls><source src="Assets/Images/video/5.mp4" type="video/mp4"></source></video>
        <video class="studentimg" controls> <source src="Assets/Images/video/6.mp4" type="video/mp4"></source></video>
        <video class="studentimg "controls><source src="Assets/Images/video/7.mp4" type="video/mp4"></source></video>
    </div>
    </div>
 <?php require_once "footer.php" ?>
<script>
    
    const grid =document.querySelector(".grid");
    const student=document.querySelector(".studentalbum");
    const city=document.querySelector(".cityalbum");
    const nature=document.querySelector(".naturealbum");
    const video=document.querySelector("videoalbum");

    const album1=document.querySelector(".album1");
    const album2=document.querySelector(".album2");
    const album3=document.querySelector(".album3");
    const album4=document.querySelector(".album4");

    let albumlist=[album1,album2,album3,album4];

    grid.addEventListener("click",function (){
    grid.style.display="none";

    if(albumlist[0]){
        student.style.display="block";
    }
    else if(albumlist[1]){
        city.style.display="block";
    }
    else if(albumlist[2]){
        nature.style.display="block";
    }
    else if(albumlist[3]){
        video.style.display="block";
    }

    })


 


</script>
</body>
 
</html>