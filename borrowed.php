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

    <title>Home</title>
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
          <li class="active"><a href="borrowed.php">Borrowed</a></li>
          <li><a href="return.php">Return Book</a></li>
          <li><a href="renew.php">Renew Membership</a></li>
        </ul>
      </div>
    </nav>
    <div>
      <h1
        style="text-align: center; background: rgba(0, 0, 0, 0.4); color: azure"
      >
        Borrowed
      </h1>
    </div>
    <a href="borrowedform.php" class="btn btn-dark" role="button">Add new Entry</a>

<div>
<table class="table table-dark">
<thead>
<tr>
  <th scope="col">ISBN</th>
  <th scope="col">BOOK ID</th>
  <th scope="col">SSN</th>
  <th scope="col">ISSUE DATE</th>
  <th scope="col">GRACE_PERIOD</th>
</tr>
</thead>
<?php 

// connect to database
  $conn = mysqli_connect('localhost', 'root', '', 'Library');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
  $sql = "SELECT ISBN, BOOK_ID, SSN, ISSUE_DATE, GRACE_PERIOD FROM `borrows`";
  
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ISBN"]. "</td><td>" . $row["BOOK_ID"] . "</td><td>"
. $row["SSN"]. "</td><td>" . $row["ISSUE_DATE"] . "</td><td>" . $row["GRACE_PERIOD"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>    
  

</div>

</div>
  </body>
</html>
