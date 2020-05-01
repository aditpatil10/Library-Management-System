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
          <li class="active"><a href="books.php">Books</a></li>
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
        Books
      </h1>
      <a href="memberform.php" class="btn btn-dark" role="button">Add new book</a>

    <div>
    <table class="table table-dark">
    <thead>
    <tr>
      <th scope="col">ISBN</th>
      <th scope="col">Title</th>
      <th scope="col">Subject Area</th>
      <th scope="col">Author</th>
    </tr>
    </thead>
  <?php 

// connect to database
  $conn = mysqli_connect('localhost', 'root', '', 'Library');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
  $sql = "SELECT ISBN, TITLE, SUBJECT_AREA, AUTHOR FROM `books`";
  
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ISBN"]. "</td><td>" . $row["TITLE"] . "</td><td>"
. $row["SUBJECT_AREA"]. "</td><td>" . $row["AUTHOR"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>    
      

    </div>
    
    </div>
  </body>
</html>
