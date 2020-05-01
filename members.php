
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
          <li class="active"><a href="members.php">Members</a></li>
          <li><a href="books.php">Books</a></li>
          <li><a href="borrowed.php">Borrowed</a></li>
          <li><a href="return.php">Return Book</a></li>
          <li><a href="renew.php">Renew Membership</a></li>
        </ul>
      </div>
    </nav>
    <div>
      <h1
        style="text-align: center; background: rgba(0, 0, 0, 0.4); color: azure"
      >
        Members
      </h1>
    </div>
    <a href="memberform.php" class="btn btn-dark" role="button">New Button</a>

    <div>
    <table class="table table-dark">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">DATE_OF_JOINING</th>
    </tr>
    </thead>
  <?php 

// connect to database
  $conn = mysqli_connect('localhost', 'root', '', 'Library');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
  $sql = "SELECT SSN, FNAME, LNAME, DATE_OF_JOINING FROM `members`";
  
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["SSN"]. "</td><td>" . $row["FNAME"] . "</td><td>"
. $row["LNAME"]. "</td><td>" . $row["DATE_OF_JOINING"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>    
      

    </div>
    
  </body>
</html>
