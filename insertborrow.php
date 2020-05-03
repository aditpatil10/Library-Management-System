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
     $sql2 = "SELECT MEMBER_TYPE FROM `members` WHERE SSN = $ssn;";

     $result = mysqli_query($conn,$sql1);
     $row = mysqli_fetch_array($result, MYSQLI_NUM);

     $result2 = mysqli_query($conn,$sql2);
     $row1 = mysqli_fetch_array($result2, MYSQLI_NUM);

     if($row1[0] == 0){
        $NewDate = Date('y-m-d', strtotime('+28 days'));
     } else{
        $NewDate = Date('y-m-d', strtotime('+104 days'));
     }

       $sql1 = "INSERT INTO `borrows` (`ISBN`, `BOOK_ID`, `SSN`, `ISSUE_DATE`, `GRACE_PERIOD`) VALUES ('$row[0]', '$bookid', '$ssn', '$date', '$NewDate');";
      if (mysqli_query($conn, $sql1)) {
        echo "New record has been added successfully !";
        $sql3 = "UPDATE `books` SET `LENDABLE` = '0' WHERE `books`.`BOOK_ID` = $bookid;";
        mysqli_query($conn, $sql3);
       } else {
         echo "Error: " . $sql . ":-" . mysqli_error($conn);
           }
    
     mysqli_close($conn);
}
?>