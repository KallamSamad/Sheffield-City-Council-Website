<!DOCTYPE html>
<html>
<head>
  <title>Education</title> <!--url title-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> <!--font awesome reference for icons-->

  <link rel="stylesheet" href="style.css"> <!--external css-->

  <!--bootstrap reference for styling-->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="IbbyFunctions.js" defer></script> <!--external js file for functions-->
</head>

<body>

  <?php include 'nav.php'; ?> <!--nav bar on top of page-->

  <h1 style="font-size: 42px; font-weight: bold; color: #000; margin-top: 40px; text-align: left;">
    There's Food For Everyone In Hallam
  </h1> <!--main page heading-->

  <div style="display: flex; gap: 40px; margin: 40px; align-items: flex-start; flex-wrap: nowrap; justify-content: space-between;"> <!---flexbox, gap and margin for spacing-->

    <!-- Image Section with fixed width -->
    <div style="position: relative; width: 500px; flex-shrink: 0;"> <!--relative positioning for button and image-->

      <!--button linking to Hallam food page-->
      <button 
        style="position: absolute; top: 20px; left: 15px; background: maroon; color: white; border: none; padding: 10px 14px; border-radius: 6px; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; transition: transform .15s ease, background .15s ease;"
        onclick="window.location.href='https://www.shu.ac.uk/eating-on-campus'">
        <i class="fa-solid fa-utensils"></i> View Hallam Food <!--font awesome icon for button-->
      </button>

      <!--main image showing Hallam food area-->
      <img src="HallamKitchen.jpg" alt="Hallam Food Area" style="width: 100%; border-radius: 10px; display: block;">
    </div>

    <!-- Info Section: Text and Button with flexible space -->
    <div style="flex-grow: 1; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;"> 

      <!--button to cycle through food info using JS-->
      <button 
        style="font-size: 40px; padding: 20px; border: none; background: maroon; color: white; border-radius: 60%; cursor: pointer; transition: transform .15s ease, background .15s ease; margin-bottom: 60px;" 
        onclick="CycleFoodInfo()">
        <i class="fa-solid fa-angle-right"></i>
      </button>

      <!--text above unordered list-->
      <p style="font-size: 24px; font-weight: bold; color: #333; margin-bottom: 20px;">
        Click the arrow to explore food options available at Hallam
      </p>

      <!--list appended to by JS function-->
      <ul id="FoodInfoList" style="list-style: disc; font-size: 22px; font-weight: bold; line-height: 1.6; margin-left: 20px; padding-left: 20px;"></ul>
    </div>

  </div>

  <?php include 'footer.php'; ?> <!--footer included at bottom-->

</body>
</html>