<?php
$conn = mysqli_connect('localhost', 'root', '', 'Library');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  $query = "SELECT * FROM `books` WHERE LENDABLE = 1";
  $query1 = "SELECT * FROM `members` WHERE IS_ACTIVE = 1";
  $result1 = mysqli_query($conn, $query); 
  $result2 = mysqli_query($conn, $query1); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Borrow Entry</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
<style>
      .ad {
        font-size: large;
      }
    </style>
</head>
<body>
    <h1 style="text-align: center; font-family: 'Merriweather', serif;"> Borrow Entry </h1>

<form form action="insertborrow.php" method="post" id="borrowedform">
<div class=" ad">
<label for="ISBN" class="ad">Book Name</label>
<select id="ref" name="bookid" form="borrowedform">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[1];?>"><?php echo $row1[4];?></option>

            <?php endwhile;?>

        </select>
  </div>
  <div class=" ad">
  <label for="ISBN" class="ad">Member Name</label>
<select id="ref" name="ssn" form="borrowedform">

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?> <?php echo $row2[3];?></option>

            <?php endwhile;?>

        </select>
  </div>
  
  <input type="submit" class="btn btn-primary ad" name="submit" value="Submit">
</form>

</body>
</html>