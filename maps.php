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
    <title>Study in Sheffield</title>
</head>
<?php require_once "nav.php"?>
<body>
 <h3 style="text-align: center;">Explore Sheffield</h3>


 <div class="map-wrapper">
<div class="search-wrapper"> 
<input class="search" type="text" placeholder="Search a location">
<input class="btn" type="button" value="Search">
 <div class="error" style="color: red;"></div>
</div>
<div id="map"></div>

</div>

<script>
let map;
let geocoder;
let marker;
function initMap() {
  const sheffield = { lat: 53.3811, lng: -1.4701 };
  const SHU = { lat: 53.3791, lng: -1.4647 };
  const UOS = {lat: 53.3806, lng: -1.4876};
   geocoder=new google.maps.Geocoder();
   map = new google.maps.Map(document.getElementById("map"), {
    center: sheffield,
    zoom: 12
  });
 
  marker=new google.maps.Marker({
    position: sheffield,
    map: map,
    title: "Sheffield"
  });

  marker=new google.maps.Marker({
    position: SHU,
    map: map,
    title: "Sheffield Hallam University"
  });

  marker=new google.maps.Marker({
    position: UOS,
    map: map,
    title: "University Of Sheffield"
  });
}
</script>

 
 
<script async
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFpTtip1nCtMFzMFCf-QR-fmdl1JftMmg&callback=initMap">
</script>

<script>
 
const click= document.querySelector(".btn");
 
click.addEventListener("click",function(){
const input = document.querySelector(".search").value;
console.log(input);

request={
    address: input
}


geocoder.geocode(request,function(results,status){
    if (status=="OK"){
        placelocation=(results[0].geometry.location);
        lat=placelocation.lat();
        long=placelocation.lng();
        console.log(lat);
        console.log(long);
        const newplace = { lat: lat, lng: long };

        map = new google.maps.Map(document.getElementById("map"), {
            center: newplace,
            zoom: 16
        
  });
    marker=new google.maps.Marker({
    position: newplace,
    map: map,
    title: input,

    
  });
  const error = document.querySelector(".error");
  error.innerHTML=" ";
}

    else{
        const error = document.querySelector(".error");
        error.innerHTML="Not Found";
    }
})

});


</script>

 
<div> 
<?php require_once "footer.php"?>
</div>
 
</body>
</html>

 