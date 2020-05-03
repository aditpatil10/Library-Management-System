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
  <th scope="col">Title</th>
  <th scope="col">Subject Area</th>
  <th scope="col">Issue Date</th>
  <th scope="col">Return Date</th>
  <th scope="col">No. of days loaned out</th>
  <th scope="col">Copies in week</th>
</tr>
</thead>
<?php 

// connect to database
  $conn = mysqli_connect('localhost', 'root', '', 'Library');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
  $sql = "SELECT week(B.ISSUE_DATE), books.TITLE, books.SUBJECT_AREA, B.ISSUE_DATE, R.Return_date, DATEDIFF(R.Return_date, B.ISSUE_DATE) AS NumberOfDaysLoanedOut, COUNT(books.ISBN) FROM `returns` AS R, borrows AS B, books 
  WHERE R.BOOK_ID = B.BOOK_ID AND R.BOOK_ID = books.BOOK_ID AND B.BOOK_ID = books.BOOK_ID 
  GROUP BY B.ISSUE_DATE";
  
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["week(B.ISSUE_DATE)"]. "</td><td>" . $row["TITLE"] . "</td><td>"
. $row["SUBJECT_AREA"]. "</td><td>" . $row["ISSUE_DATE"] . "</td><td>" . $row["Return_date"] . "</td><td>"  . $row["NumberOfDaysLoanedOut"]  . "</td><td>" . $row["COUNT(books.ISBN)"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>    
  

</div>

</div>
  </body>
</html>
