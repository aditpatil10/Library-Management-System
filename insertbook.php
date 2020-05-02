<?php
$conn = mysqli_connect('localhost', 'root', '', 'Library');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }


if(isset($_POST['submit']))
{    $isbn = $_POST['isbn'];
     $edition = $_POST['edition'];
     $sarea = $_POST['sarea'];
     $title = $_POST['title'];
     $lend = $_POST['lend'];
     $auth = $_POST['auth'];
     $desc = $_POST['desc'];
     $ref = $_POST['ref'];
 
     $sql = "INSERT INTO `catalog` (`Isbn`, `SSN`, `TITLE`, `DESCRIPTION`, `SUBJECT_AREA`) VALUES ('$isbn', '$ref', '$title', '$desc', '$sarea');";
     $sql1 = "INSERT INTO `books` (`ISBN`, `BOOK_ID`, `EDITION`, `SUBJECT_AREA`, `TITLE`, `LENDABLE`, `AUTHOR`) VALUES ('$isbn', NULL, '$edition', '$sarea', '$title', '$lend', '$auth');";
     if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>