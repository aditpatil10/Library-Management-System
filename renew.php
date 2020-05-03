<?php
$conn = mysqli_connect('localhost', 'root', '', 'Library');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  $query1 = "SELECT * FROM `members`";
  $result2 = mysqli_query($conn, $query1); 
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
      .ad {
        font-size: large;
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
          <li  class="active"><a href="renew.php">Renew Membership</a></li>
        </ul>
      </div>
    </nav>
    <div>
      <h1
        style="text-align: center; background: rgba(0, 0, 0, 0.4); color: azure"
      >
        Renew Membership
      </h1>
      <form form action="renewupdate.php" method="post" id="renew">
<div class=" ad">
<label for="ISBN" class="ad">Book Name</label>
<select id="ref" name="ssn" form="renew">

            <?php while($row1 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?> <?php echo $row1[3];?></option>

            <?php endwhile;?>

        </select>
  </div>
  
  <input type="submit" class="btn btn-primary ad" name="submit" value="Renew">
</form>

    </div>
  </body>
</html>
