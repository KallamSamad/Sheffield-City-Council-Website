<!DOCTYPE html>
<html>
<head>
  <title>Crime In Sheffield</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"><!--font awesome reference for icons-->

  <link rel="stylesheet" href="style.css"> <!--external css-->

  <!--bootstrap reference for styling-->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="IbbyFunctions.js" defer></script>  <!--external js file for functions-->
</head>

<body>
<!--main body-->

  <?php include 'nav.php'; ?><!--nav bar on top of page-->
  <?php include 'EduNav.php'; ?>


  <h1 style="font-size: 42px; font-weight: bold; color: #000; margin-top: 40px; text-align: left;">
    Crime In Sheffield From Jan 2025 to Jan 2026
  </h1><!--font , bold, left-->

  <div style="display: flex; gap: 40px; margin: 40px;"> <!--flexbox, gap and margin for spacing-->

    <div style="position: relative;"><!--relative positioning for button and image-->

      <!--button linking to external crime map-->
      <button 
        style="position: absolute; top: 20px; left: 15px; background: maroon; color: white; border: none; padding: 10px 14px; border-radius: 6px; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; transition: transform .15s ease, background .15s ease;"
        onclick="window.location.href='https://www.police.uk/pu/your-area/south-yorkshire-police/sheffield-city-centre/?tab=CrimeMap'">
        <i class="fa-solid fa-handcuffs"></i> View Crime Statistics <!--font awesome icon for button-->
      </button>

      <!--main image showing crime summary-->
      <img src="CrimePic.png" alt="Summary Of Crime In Sheffield" style="width: 100%; max-width: 500px; border-radius: 10px; display: block;">
    </div>  <!-- image, was too small tried to make it bigger with max width -->

    <div style="max-width: 500px; flex: 1 1 320px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
      
      <!--button to cycle through crime info using JS-->
      <button 
        style="font-size: 40px; padding: 20px; border: none; background: maroon; color: white; border-radius: 60%; cursor: pointer; transition: transform .15s ease, background .15s ease; margin-bottom: 60px;" 
        onclick="CycleCrimeInfo()">
        <i class="fa-solid fa-angle-right"></i>
      </button>

      <!--text above unordered list-->
      <p style="font-size: 24px; font-weight: bold; color: #333; margin-bottom: 20px;">
        Click the arrow to see crime stats in Sheffield
      </p>

      <!--list appended to by js function-->
      <ul id="CrimeInfoList" style="list-style: disc; font-size: 22px; font-weight: bold; line-height: 1.6; margin-left: 20px; padding-left: 20px;"></ul>
    </div>

  </div>

  <?php include 'footer.php'; ?> <!--footer included at bottom-->

</body>
</html>