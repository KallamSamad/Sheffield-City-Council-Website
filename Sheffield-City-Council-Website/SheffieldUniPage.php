<html>
<head>
  <title>Education</title> <!-- title-->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="a11y.css">

  
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
        
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <div class="page"> 
<div class="sandwich"> 

<?php include 'nav.php'; ?> <!-- reference nav.php file -->

<h1 class="page-title">University Of Sheffield- TOP 100 GLOBALLY</h1> <!-- Title -->

<div class="eduComponents"> <!-- set componenets all in one container so its easier to style with css -->

<!--image-->
<img src="Assets/Images/latin.webp" width="600" alt="University of Sheffield Campus">

<!--navigation button to switch between hallam and sheffield university-->
<button class="EducationArrowButton" onclick="window.location.href='HallamUniPage.php'">
  <i class="fa-solid fa-angle-right"></i> <!-- symbol used for navigation button from font awesome website-->
</button>

<!--Info about University-->
<ul class="EduInfo">
  <li>Over 85% of graduates are in graduate-level employment or further study</li>
  <li>Our staff and students achieve great things. Six members of our staff have been awarded a prestigious Nobel Prize.</li>
  <li>Voted top in the Russell Group for student experience for three consecutive years</li>
</ul>
<div>



<h2 class="CourseSearch">Search Courses</h2> <!--class makes styling easier-->

<form method="GET" class="SearchBar"> <!-- get method to query for data, send searched data into url-->
  <!-- only takes text input, sends data via url as 'CourseSearch' -->
  <input type="text" name="CourseSearch" placeholder="Search for a course"  
         value="<?php echo isset($_GET['CourseSearch']) ? htmlspecialchars($_GET['CourseSearch']) : ''; ?>"> <!-- set CourseSearch to nothing if empty -->
  <button type="submit">Search</button> <!--submits data when button clicked -->
</form>

<?php
$db = new SQLite3('SoftwareProjectDB.DB'); // connected to database 

$CourseSearch = isset($_GET['CourseSearch']) ? $_GET['CourseSearch'] : '';

//takes CourseSearch from url to use for database query, sets it to nothing if empty
if (!empty($CourseSearch)) {   //if statement for when users enter data ( not empty) into search bar
    echo '<table id="courseTable">'; //print table
    echo '<tr><th>Course Name</th></tr>'; //print table row with name 'course name'

    // prepare sql query

    $stmt = $db->prepare('SELECT * FROM Course WHERE CourseName LIKE :term');  // prepapre sql execution to select all courses with matching course name

    $stmt->bindValue(':term', '%' . $CourseSearch . '%', SQLITE3_TEXT); // improves useability, no need to search for full course name 
    $courses = $stmt->execute(); // execute sql

    $hasResults = false; //set false if no results found , used in if statment below to print message
    while ($row = $courses->fetchArray(SQLITE3_ASSOC)) {    // while loop to print through sql results as long as rows left from sql query
        $hasResults = true; // if results found, $hasResults is true
        echo "<tr>";// print table row
        echo "<td>" . htmlspecialchars($row['CourseName']) . "</td>"; // print course names,  preventing XSS (Cross-site Scripting) attacks by ensuring that any special characters in user input are not interpreted as HTML by the browser.
        echo "</tr>";// close table
    }

    if (!$hasResults) {  // if no results found, print message 'no courses found' 
          echo "<tr><td>No courses found.</td></tr>";  // print message if if statement true
    }

    echo '</table>'; // close table -->
}
?>


</div>
</div>
 
</div>
 
<?php include 'footer.php'; ?> <!-- reference footer-->

</body>
</html>