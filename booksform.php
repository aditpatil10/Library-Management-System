<?php
$conn = mysqli_connect('localhost', 'root', '', 'Library');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  $query = "SELECT * FROM `librarians` WHERE LIBRARIAN_TYPE = 5";
  $result1 = mysqli_query($conn, $query); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Book</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
</head>
<body>
    <h1 style="text-align: center; font-family: 'Merriweather', serif;"> Enter Member Data </h1>

<form form action="insertbook.php" method="post" id="bookdata">
<div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">ISBN</label>
    <input type="number" class="form-control" id="isbn" name= "isbn">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">BOOK ID</label>
    <input type="number" class="form-control" id="fname" name= "bookid">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Edition</label>
    <input type="text" class="form-control" id="mname" name= "edition">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Subject Area</label>
    <input type="text" class="form-control" id="lname" name= "sarea">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Title</label>
    <input type="text" class="form-control" id="phone" name= "title">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Lendable</label>
    <input type="number" class="form-control" id="haddress" name= "lend">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Author</label>
    <input type="text" class="form-control" id="caddress" name= "auth">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Description</label>
    <input type="text" class="form-control" id="isactive" name= "desc">
  </div>
  </div>
  <button class="btn btn-default">Cancel</button>
  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
</form>
<label for="ref">Reference librarian</label>
<select id="ref" name="ref" form="bookdata">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>

            <?php endwhile;?>

        </select>

</body>
</html>