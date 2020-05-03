<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    



<?php
$conn = mysqli_connect('localhost', 'root', '', 'Library');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }


if(isset($_POST['submit']))
{    $bookid = $_POST['bookid'];
     $ssn = $_POST['ssn'];
     $date = date('Y-m-d');


 
     $sql1 = "SELECT ISBN FROM `books` WHERE BOOK_ID = $bookid;";
     $sql2 = "SELECT FNAME, LNAME FROM `members` WHERE SSN = $ssn;";
     $sql3 = "SELECT ISSUE_DATE FROM `borrows` WHERE SSN = $ssn";
     $sql4 = "SELECT Recipt_no FROM `returns` WHERE SSN = $ssn";

     $result = mysqli_query($conn,$sql1);
     $row = mysqli_fetch_array($result, MYSQLI_NUM);

     $result2 = mysqli_query($conn,$sql2);
     $row1 = mysqli_fetch_array($result2, MYSQLI_NUM);

     $result3 = mysqli_query($conn,$sql3);
     $row3 = mysqli_fetch_array($result3, MYSQLI_NUM);

       $sql1 = "INSERT INTO `returns` (`Recipt_no`, `ISBN`, `BOOK_ID`, `SSN`, `Return_date`) VALUES (NULL, '$row[0]', '$bookid', '$ssn', '$date');";
      if (mysqli_query($conn, $sql1)) {
        $sql4 = "SELECT Recipt_no FROM `returns` WHERE SSN = $ssn";
        $result = mysqli_query($conn,$sql4);
        $recep = mysqli_fetch_array($result, MYSQLI_NUM);

        echo "<center>";
     echo "<h1>Your receipt:</h1>" ;
     echo "<p><b>Receipt no.:</b> ". $recep[0] . "</p>" ;
     echo "<p><b>Name:</b> ". $row1[0]. $row1[1] . "</p>" ;
     echo "<p><b>Date Issue:</b> ". $row3[0]. "</p>" ;
     echo "<p><b>Date Issue:</b> ". $date . "</p>" ;
     echo "<h2>Thank You!</h1>" ;
     echo "</center>";

        $sql3 = "UPDATE `books` SET `LENDABLE` = '1' WHERE `books`.`BOOK_ID` = $bookid;";
        mysqli_query($conn, $sql3);

        $returnn = "UPDATE `borrows` SET `RETURN_STATUS`= 1 WHERE BOOK_ID = $bookid AND ISBN = $row[0];";
        mysqli_query($conn, $returnn);
        $overdue = "UPDATE `borrows` SET `OVERDUE_STATUS`=' '";
        mysqli_query($conn, $overdue);
       } else {
         echo "Error: " . $sql . ":-" . mysqli_error($conn);
           }
    
     mysqli_close($conn);
}
?>

</body>
</html>
