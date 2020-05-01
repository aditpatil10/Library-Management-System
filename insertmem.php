<?php
$conn = mysqli_connect('localhost', 'root', '', 'Library');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }


if(isset($_POST['submit']))
{    $ssn = $_POST['ssn'];
     $fname = $_POST['fname'];
     $mname = $_POST['mname'];
     $lname = $_POST['lname'];
     $phone = $_POST['phone'];
     $home = $_POST['haddress'];
     $campus = $_POST['caddress'];
     $isactive = $_POST['isactive'];
     $dateofjoining = $_POST['dateofjoining'];
     $memtype = $_POST['memtype'];
 
     $sql = "INSERT INTO `members` (`SSN`, `FNAME`, `MNAME`, `LNAME`, `PHONE`, `HOME_MAILING ADDRESS`, `CAMPUS_ADDRESS`, `IS_ACTIVE`, `DATE_OF_JOINING`, `MEMBER_TYPE`) VALUES ('$ssn', '$fname', '$mname', '$lname', '$phone', '$home', '$campus', '$isactive', '$dateofjoining', '$memtype');";
 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>