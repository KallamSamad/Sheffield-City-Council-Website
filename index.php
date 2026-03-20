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
<div class="page"> 
<div class="sandwich">    
    <div class="header">
        <img class="logo" src="Assets/Images/Sheffield.jpg" alt="Logo of website">
        <h1 style="text-align:center;">Study In Sheffield</h1>
        <img class="logo" src="Assets/Images/Sheffield.jpg" alt="Logo of website" height="20px" style="transform: scaleX(-1);">
      </div>
<div class="caption">
  <p>Image by © Doug Banks Photography</p>
  <p>Image by © Doug Banks Photography</p>
</div>
   

    <div class="steel">
        <h2 >...so you want to move to the Steel City?</h2></div>
        <div class="fact-popup">
        <div class="fact-left">Sheffield was once the <b>steel-making capital</b> of the world. </div>
        <div class="fact-right">Sheffield has five rivers running through it: the <b>Don</b>, <b>Sheaf</b>, <b>Rivelin</b>, <b>Loxley</b>, and <b>Porter</b>. </div>
        <div class="fact-bottomright">The name Sheffield is derived from the <b>River Sheaf</b>, which runs through the city. </div>
        <div class="fact-bottomleft">Sheffield is built on <b>seven hills</b>, just like Rome. </div>
        <div class="fact-topleft">Sheffield is the <b>4th Biggest city</b> in England. </div>
        <div class="fact-topright"><b>Sheffield F.C.</b> is the world's <b>oldest</b> football club. </div></div>

        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="Assets/Images/xmasmark1.jpg" class="d-block w-100" alt="An image of Chistmas market" height="20%" width="50%">
            <div class="carousel-caption-custom">Photo by John Smith / Marketing Sheffield</div>
  
          </div>
            <div class="carousel-item">
            <img src="Assets/Images/citycenter.jpg" class="d-block w-100" alt="An image of City Center Sheffield">
            <div class="carousel-caption-custom">©Doug Banks commissioned for Marketing Sheffield</div>
  
          </div>
            <div class="carousel-item">
            <img src="Assets/Images/parkhill.jpg" class="d-block w-100" alt="Parkhill flats ">
            <div class="carousel-caption-custom">© Marketing Sheffield</div>
  
          </div>
            <div class="carousel-item">
            <img src="Assets/Images/arial.jpg" class="d-block w-100" alt="Skyscrapers in sheffie;d">
          <div class="carousel-caption-custom">© Marketing Sheffield</div>  
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
 <script>
let lastScroll = 0;

const cityFacts = [
"Sheffield earned the nickname 'Steel City' because of its world-famous steel and cutlery industry.",
"Around 61% of Sheffield is green space, filled with parks, woodlands, and gardens.",
"Sheffield is built on seven hills, which people jokingly compare to Rome.",
"Despite being a large city, Sheffield is sometimes called the 'largest village in England' because of its friendly community feel.",
"The city of Sheffield is named after the River Sheaf, which flows through the area.",
"Sheffield is one of the largest cities in the United Kingdom by geographic area.",
"The city officially received its city status in 1893.",
"People have lived in the Sheffield area since the last Ice Age.",
"Sheffield hosted the World University Games in 1991, bringing international athletes to the city.",
"Sheffield was twinned with the city of Donetsk in 1956 during the Cold War.",
"Sheffield’s large student population gives the city a young and energetic atmosphere.",
"Many students say Sheffield has one of the friendliest student communities in the UK."
];
const foodFacts = [
"Yorkshire pudding is a famous local dish often served with roast dinners or even as a dessert.",
"Henderson’s Relish is a spicy Sheffield sauce created by Henry Henderson in the 1800s and still loved by locals today.",
"A Hendos pie is a local meat pie flavoured with the famous Henderson’s Relish.",
"The Sheffield fishcake is a regional dish made from fish layered between slices of potato, battered and deep fried.",
"Sheffield has a strong brewing tradition and is home to many popular independent breweries.",
"Parkin is a traditional Northern gingerbread cake made with oats, treacle, and ginger."
];
const industryFacts = [
"Sheffield Plate was a silver-plating technique invented in the city during the 1700s.",
"Henry Bessemer developed the Bessemer Process in Sheffield, which revolutionised mass steel production.",
"Harry Brearley discovered stainless steel in Sheffield in 1913 while experimenting with alloys.",
"Industrialist John Brown became known as the father of the South Yorkshire iron trade.",
"The Advanced Manufacturing Research Centre in Sheffield works with companies like Boeing on aerospace technology.",
"Metal tuning forks have been manufactured in Sheffield since 1841 for music and scientific testing.",
"The Sheffield Blitz during World War II saw German bombing raids heavily damage the city.",
"The Women of Steel statue honours the women who worked in Sheffield’s steel factories during wartime."
];
const cultureFacts = [
"The Arctic Monkeys are one of the most famous rock bands to come from Sheffield.",
"The Human League, a pioneering synth-pop band, formed in Sheffield in 1977.",
"Joe Cocker, a Grammy-winning singer with a powerful blues voice, was born in Sheffield.",
"Jarvis Cocker, the lead singer of Pulp, is another well-known Sheffield musician.",
"Def Leppard, a globally successful heavy metal band, was formed in Sheffield.",
"The Thompson Twins were a pop group from Sheffield that became popular during the 1980s.",
"The band ABC also came from Sheffield and produced several classic 1980s pop hits.",
"World champion boxer Prince Naseem Hamed is one of the many athletes who came from Sheffield.",
"The Crucible Theatre in Sheffield hosts the annual World Snooker Championship.",
"The Sheffield Steelers are a successful professional ice hockey team based in the city."
];
const natureFacts = [
"Around one third of Sheffield lies within the Peak District National Park.",
"The city contains hundreds of parks and green spaces, with estimates of over 250 across the region.",
"Sheffield has around 4.5 million trees, meaning there are actually more trees than people.",
"Blake Street is one of the steepest residential streets in England.",
"The lowest recorded temperature in Sheffield was −8.2°C in 2010.",
"The Sheffield Botanical Gardens cover 19 acres and contain more than 5,000 plant species.",
"Sheffield uses district heating technology that converts waste into energy to heat homes and buildings.",
"Park Hill Flats are one of Europe’s largest Brutalist architecture projects."
];
const studentFacts = [
"More than 60,000 students study in Sheffield across its two universities.",
"The University of Sheffield is part of the prestigious Russell Group of research universities.",
"Sheffield Hallam University has one of the largest student populations in the UK.",
"The University of Sheffield Students’ Union has repeatedly been voted one of the best in the UK.",
"Students often study in the Diamond Library, which is open 24 hours during term time.",
"Popular student neighbourhoods include Ecclesall Road, Crookes, and Broomhill.",
"Endcliffe Village is one of the largest student accommodation complexes in the country.",
"Sheffield is widely considered one of the most affordable student cities in the UK.",
"The Peak District National Park is only about fifteen minutes away, making it perfect for student hiking trips.",
"West Street is one of the most popular nightlife areas for students in Sheffield.",
"Sheffield has more than 300 student societies and clubs covering hobbies, sports, and cultures.",
"Students can take part in university radio stations and student-run newspapers.",
"The Leadmill music venue is famous for hosting gigs and student nights.",
"Leadmill Fridays have become a popular tradition among Sheffield students.",
"Many student music gigs and open mic nights take place across the city.",
"Devonshire Green is a popular park where students relax near the city centre.",
"Kelham Island has become a trendy district full of cafes, restaurants, and food markets.",
"Independent coffee shops around Sheffield are popular study spots for students.",
"The tram network makes it easy for students to travel between campuses and the city centre.",
"Students can purchase discounted travel passes for buses and trams.",
"Freshers’ Week introduces new students to hundreds of events and activities.",
"Sheffield attracts international students from more than 140 countries.",
"Students can join sports clubs ranging from football and rugby to fencing and climbing.",
"The nearby gritstone cliffs of the Peak District make Sheffield famous for climbing.",
"The annual Varsity competition sees the two universities compete in dozens of sports.",
"Varsity events attract thousands of spectators every year.",
"Many students volunteer in community projects and local charities.",
"The city provides many late-night study spaces and libraries during exam periods.",
"Restaurants and shops across the city often offer student discounts.",
"The Students’ Union building includes cafes, shops, bars, and social spaces.",
"Students often enjoy discounted cinema nights around the city.",
"The Winter Garden is a popular meeting place for students in the city centre.",
"The Peace Gardens are often filled with students relaxing between lectures.",
"Students regularly attend football matches at Bramall Lane or Hillsborough Stadium.",
"Sheffield has a strong student cycling culture with many bike routes.",
"The Botanical Gardens are a popular place for student picnics and walks.",
"Career fairs and networking events help students connect with employers.",
"Both universities offer internships and placement opportunities with local companies."
];

  
function magic(){

  const fact1 = document.querySelector(".fact-left");
  const fact2 = document.querySelector(".fact-right");
  const fact3 = document.querySelector(".fact-bottomright");
  const fact4 = document.querySelector(".fact-bottomleft");
  const fact5 = document.querySelector(".fact-topright");
  const fact6= document.querySelector(".fact-topleft");

  const random1=Math.floor(Math.random()*cityFacts.length);
  const random2=Math.floor(Math.random()*foodFacts.length);
  const random3=Math.floor(Math.random()*industryFacts.length);
  const random4=Math.floor(Math.random()*cultureFacts.length);
  const random5=Math.floor(Math.random()*natureFacts.length);
  const random6=Math.floor(Math.random()*studentFacts.length);

  const scrollingUp = window.scrollY < lastScroll; 

  if(window.scrollY > 15 && !scrollingUp){
    fact1.innerHTML=`<h5 style="text-align: center"><b>City Fact</b></h5> <div style="font-size: 14px">${cityFacts[random1]}</div>`;
    fact1.classList.add("show");
  } else {
    fact1.classList.remove("show");
  }

  if(window.scrollY > 30 && !scrollingUp){
    fact2.innerHTML=`<h5 style="text-align: center"><b>Food Fact</b></h5> <div style="font-size: 14px">${foodFacts[random2]}</div>`;
    fact2.classList.add("show");
  } else {
    fact2.classList.remove("show");
  }

  if(window.scrollY > 45 && !scrollingUp){
    fact3.innerHTML=`<h5 style="text-align: center"><b>Industry Fact</b></h5>  <div style="font-size: 14px">${industryFacts[random3]}</div>`;
    fact3.classList.add("show");
  } else {
    fact3.classList.remove("show");
  }

  if(window.scrollY > 60 && !scrollingUp){
      fact4.innerHTML=`<h5 style="text-align: center"><b>Culture Fact</b></h5>  <div style="font-size: 14px">${cultureFacts[random4]}</div>`;
      fact4.classList.add("show");
  } else {
    fact4.classList.remove("show");
  }
   if(window.scrollY > 70 && !scrollingUp){
    fact5.innerHTML=`<h5 style="text-align: center"><b>Nature Fact</b></h5> <div style="font-size: 14px"> ${natureFacts[random5]}</div>`;
    fact5.classList.add("show");
  } else {
    fact5.classList.remove("show");
  }

   if(window.scrollY > 30 && !scrollingUp){
    fact6.innerHTML=`<h5 style="text-align: center"><b>Student Fact</b></h5>  <div style="font-size: 14px">${studentFacts[random6]}</div>`;
    fact6.classList.add("show");
  } else {
    fact6.classList.remove("show");
  }


  lastScroll = window.scrollY;
}

window.addEventListener("scroll", magic);
 </script>
</body>
</html>