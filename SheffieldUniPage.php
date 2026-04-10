<html>
<head>

  <title>Education</title><!-- title of website in broswer -->

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"><!-- reference to font awesome  website for button icons-->

  
  <link rel="stylesheet" href="style.css"><!-- reference to external css file -->

  <link rel="stylesheet" href="a11y.css"><!-- reference to external css file -->


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"><!--BootStrap-->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


<?php include 'nav.php'; ?><!-- reference to nav bar on top of page -->

<?php include 'EduNav.php'; ?> <!-- another navbar below the main navbar specific to education page -->


<div class="page">
  

    <h1 class="page-title">University Of Sheffield- TOP 100 GLOBALLY</h1> <!-- Title -->

    <div class="eduComponents"> 
     
       <img src="Assets/Images/latin.webp" width="600" alt="University of Sheffield Campus">

      <button class="EducationArrowButton" onclick="window.location.href='HallamUniPage.php'"><!-- switch to sheffield uni page -->
        <i class="fa-solid fa-angle-right"></i>
      </button>

      <!--Info about hallam uni -->
 <ul class="EduInfo">

  <li style="font-size:25px; font-weight:bold; margin-bottom:20px;">
    Over 85% of graduates are in graduate-level employment or further study
  </li>
  <li style="font-size:25px; font-weight:bold; margin-bottom:20px;">
     Our staff and students achieve great things. Six members of our staff have been awarded a prestigious Nobel Prize.
  </li>
  <li style="font-size:25px; font-weight:bold;">
    Voted top in the Russell Group for student experience for three consecutive years
  </li>
  
</ul>

    </div>

    <h2 class="CourseSearch">Search Courses</h2><!-- title for course search bar-->
    <!-- get data from search bar, keeps value after reload -->
    <!-- htmlspecialchars prevents XSS attacks -->
    <form method="GET" class="SearchBar"><!--Search form-->
      <input type="text" name="CourseSearch"
             placeholder="Search for a course"   
             value="<?php echo isset($_GET['CourseSearch']) ? htmlspecialchars($_GET['CourseSearch']) : ''; ?>">
      <button type="submit">Search</button>
    </form>

    <?php
    $db = new SQLite3('SoftwareProjectDB.DB'); //connect to database

    $CourseSearch = isset($_GET['CourseSearch']) ? $_GET['CourseSearch'] : '';//get search data from url, if empty set to nothing, store in variable $CourseSearch for php sql query
    $selectedCourseID = isset($_GET['CourseID']) ? $_GET['CourseID'] : null;//get courseID from url when user clicks on course name, if empty set to null

    
    if (!empty($CourseSearch)) {//if user searched for a course, run code, if empty, skip

        
        echo "<div style='display:flex; gap:40px; align-items:flex-start;'>"; //splits flexbox into two columns under image, left courses and right testimonies, with gap and aligned to top

        
        echo "<div style='flex:1;'>";  // equal width for both sides/ columns of flex layout

        // Create a table to display course names
        echo '<table id="courseTable">';
        echo "<tr><th style='font-size:25px; font-weight:bold;'>Course Name</th></tr>";// Table header for course names

        
        $stmt = $db->prepare('SELECT CourseID, CourseName FROM Course WHERE UniversityID = 1 AND CourseName LIKE :term'); // prepapre sql query to select all courses with matching course name from university id 2
        $stmt->bindValue(':term', '%' . $CourseSearch . '%', SQLITE3_TEXT);// improves useability with & wildcard,  no need to search for full course name
        $courses = $stmt->execute();//execute sql query

        $hasResults = false;//set to false
        
        while ($row = $courses->fetchArray(SQLITE3_ASSOC)) {  // while loop to print through sql results as long as rows left in database from sql query
            $hasResults = true;// // if results found, turn true otherwise stays false and prints 'no courses found' message below

            $highlight = ($selectedCourseID == $row['CourseID']) ? "style='background:#eee'" : "";//determine which course to highlight based on courseid

            echo "<tr $highlight>";  // actually highlight selected course with background #eee
//link to same page with course search and course id in url for php to use in sql queries
//urlencode() function is an inbuilt PHP function used to encode the URL
//course names in table
           echo "<td>
            <a style='font-size:25px; font-weight:bold;' href='?CourseSearch=" . urlencode($CourseSearch) . "&CourseID=" . $row['CourseID'] . "'> 
            " . htmlspecialchars($row['CourseName']) . "
            </a>
            </td>";

            echo "</tr>";
        }

        
        if (!$hasResults) {// if no results found, print message 'no courses found'
            echo "<tr><td>No courses Found.</td></tr>";
        }

        echo '</table>';// close the courses table
        echo "</div>";// close  flexbox on left side for columns

        
        echo "<div style='flex:1; margin-top:40px;'>"; //right side of flexbox columns- all testimonial stuff below will be on right side of page

        if ($selectedCourseID) {// if a course is selected, display testimonials for that course

            
            $stmt = $db->prepare('SELECT CourseName FROM Course WHERE CourseID = :id');//prepare sql query
            $stmt->bindValue(':id', $selectedCourseID, SQLITE3_INTEGER);//bind course id to query
            $course = $stmt->execute()->fetchArray(SQLITE3_ASSOC);//execute sql query, fetch course name of testimonial shown for heading

            echo "<h3>Testimonials for " . htmlspecialchars($course['CourseName']) . "</h3>";// print 'testimonials for' + coursename, h3 header

            //prepare sql query to select testimonials with same CourseID as courses searched 
            $stmt = $db->prepare(' 
                SELECT DisplayName, Country, Content 
                FROM Testimonial 
                WHERE CourseID = :id
            ');
            $stmt->bindValue(':id', $selectedCourseID, SQLITE3_INTEGER);//bind the CourseID to the query
            $results = $stmt->execute();//execute sql query 

            $hasResults = false;// set to false if no testimonials found, used in if statement below to print message

            
            while ($row = $results->fetchArray(SQLITE3_ASSOC)) { // while loop to print through sql results as long as rows left in database from sql query
                $hasResults = true;
                echo "<div style='border:1px solid #ccc; padding:15px; margin-bottom:15px; border-radius:10px; font-size:22px; font-weight:bold;'>";//inline css for testimonies,
                echo "<strong>" . htmlspecialchars($row['DisplayName']) . "</strong> (" . htmlspecialchars($row['Country']) . ")";//print name and country , strong-> bold text
                echo "<p style='font-weight:bold;'>" . htmlspecialchars($row['Content']) . "</p>";//print testimonial content
            }
            // Message if no testimonial found for selected course
            if (!$hasResults) {
                echo "<p>No Testimonies Found.</p>";
            }

        } else {
            
           echo "<p style='font-size:20px;'>Select A Course To View It's Testimonies</p>";// Message shown when user searched for a course but hasn't selected a course to view testimonials for 
        }

        echo "</div>";//closes right column
        echo "</div>"; //closes flexbox
    }
    ?>


</div><!-- closes  main page -->

<?php include 'footer.php'; ?><!-- reference external footer at the bottom-->

</body>
</html>