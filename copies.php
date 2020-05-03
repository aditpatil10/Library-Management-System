<?php 

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'Library');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">

    <title>Report</title>
    <style>
      body {
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Library Management System</a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
          <li><a href="members.php">Members</a></li>
          <li><a href="books.php">Books</a></li>
          <li><a href="borrowed.php">Borrowed</a></li>
          <li><a href="return.php">Return Book</a></li>
          <li><a href="renew.php">Renew Membership</a></li>
        </ul>
      </div>
    </nav>
    <div>
      <h1 style="text-align: center; font-family: 'Merriweather', serif;"> Weekly Report </h1>
<div>
<table class="table table-dark">
<thead>
<tr>
  <th scope="col">Week</th>
  <th scope="col">Copies</th>
</tr>
</thead>
<?php 

// connect to database
  $conn = mysqli_connect('localhost', 'root', '', 'Library');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
  $sql = "SELECT week(B.ISSUE_DATE), COUNT(*) FROM borrows AS B GROUP BY week(B.ISSUE_DATE)";
  
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["week(B.ISSUE_DATE)"]. "</td><td>" . $row["COUNT(*)"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>    
  

</div>

</div>
  </body>
</html>
