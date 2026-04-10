<html>
<head>
  <title>Education</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="a11y.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include 'nav.php'; ?>
<?php include 'EduNav.php'; ?>

<div class="page">
  <h1 class="page-title">Hallam University - TOP 800 GLOBALLY</h1>

  <div class="eduComponents">
    <img src="Assets/Images/owen2.webp" width="600" alt="University of Hallam">

    <button class="EducationArrowButton" onclick="window.location.href='SheffieldUniPage.php'">
      <i class="fa-solid fa-angle-right"></i>
    </button>

    <ul class="EduInfo">
      <li style="font-size:25px; font-weight:bold; margin-bottom:20px;">
        95%–96% of graduates in work or further study 15 months after finishing their studies.
      </li>
      <li style="font-size:25px; font-weight:bold; margin-bottom:20px;">
        Awarded Gold in the 2023 Teaching Excellence Framework (TEF).
      </li>
      <li style="font-size:25px; font-weight:bold; margin-bottom:20px;">
        Largest supplier of graduates to the public sector in the UK.
      </li>
      <li style="font-size:25px; font-weight:bold;">
        Apprenticeship award, Educate North Awards (2024)
      </li>
    </ul>
  </div>

  <h2 class="CourseSearch">Search Courses</h2>

  <form method="GET" class="SearchBar">
    <input
      type="text"
      name="CourseSearch"
      placeholder="Search for a course"
      value="<?php echo isset($_GET['CourseSearch']) ? htmlspecialchars($_GET['CourseSearch']) : ''; ?>"
    >
    <button type="submit">Search</button>
  </form>

  <?php
  $db = new SQLite3('SoftwareProjectDB.DB');

  $CourseSearch = isset($_GET['CourseSearch']) ? $_GET['CourseSearch'] : '';
  $selectedCourseID = isset($_GET['CourseID']) ? $_GET['CourseID'] : null;

  if (!empty($CourseSearch)) {
      echo "<div style='display:flex; gap:40px; align-items:flex-start;'>";
      echo "<div style='flex:1;'>";

      echo '<table id="courseTable">';
      echo "<tr><th style='font-size:25px; font-weight:bold;'>Course Name</th></tr>";

      $stmt = $db->prepare('SELECT CourseID, CourseName FROM Course WHERE UniversityID = 2 AND CourseName LIKE :term');
      $stmt->bindValue(':term', '%' . $CourseSearch . '%', SQLITE3_TEXT);
      $courses = $stmt->execute();

      $hasResults = false;

      while ($row = $courses->fetchArray(SQLITE3_ASSOC)) {
          $hasResults = true;
          $highlight = ($selectedCourseID == $row['CourseID']) ? "style='background:#eee'" : "";

          echo "<tr $highlight>";
          echo "<td>
                  <a style='font-size:25px; font-weight:bold;' href='?CourseSearch=" . urlencode($CourseSearch) . "&CourseID=" . $row['CourseID'] . "'>
                    " . htmlspecialchars($row['CourseName']) . "
                  </a>
                </td>";
          echo "</tr>";
      }

      if (!$hasResults) {
          echo "<tr><td>No courses found.</td></tr>";
      }

      echo '</table>';
      echo "</div>";

      echo "<div style='flex:1; margin-top:40px;'>";

      if ($selectedCourseID) {
          $stmt = $db->prepare('SELECT CourseName FROM Course WHERE CourseID = :id');
          $stmt->bindValue(':id', $selectedCourseID, SQLITE3_INTEGER);
          $course = $stmt->execute()->fetchArray(SQLITE3_ASSOC);

          if ($course) {
              echo "<h3>Testimonials for " . htmlspecialchars($course['CourseName']) . "</h3>";
          }

          $stmt = $db->prepare('
              SELECT DisplayName, Country, Content
              FROM Testimonial
              WHERE CourseID = :id
          ');
          $stmt->bindValue(':id', $selectedCourseID, SQLITE3_INTEGER);
          $results = $stmt->execute();

          $hasResults = false;

          while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
              $hasResults = true;
              echo "<div style='border:1px solid #ccc; padding:15px; margin-bottom:15px; border-radius:10px; font-size:22px; font-weight:bold;'>";
              echo "<strong>" . htmlspecialchars($row['DisplayName']) . "</strong> (" . htmlspecialchars($row['Country']) . ")";
              echo "<p style='font-weight:bold;'>" . htmlspecialchars($row['Content']) . "</p>";
              echo "</div>";
          }

          if (!$hasResults) {
              echo "<p>No testimonies found.</p>";
          }
      } else {
          echo "<p style='font-size:20px;'>Select a course to view its testimonies.</p>";
      }

      echo "</div>";
      echo "</div>";
  }
  ?>
</div>

<?php include 'footer.php'; ?>

</body>
</html>