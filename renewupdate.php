<?php
$conn = mysqli_connect('localhost', 'root', '', 'Library');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }


if(isset($_POST['submit']))
{    $ssn = $_POST['ssn'];
    $NewDate = Date('y-m-d', strtotime('+1460 days'));

     
 
     $sql = "UPDATE members
     SET MEMBERSHIP_EXPIRY = '$NewDate'
     WHERE SSN = $ssn;";
     if (mysqli_query($conn, $sql)) {
        echo "Your membership has been renewed!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>