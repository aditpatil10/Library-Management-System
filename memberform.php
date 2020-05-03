<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Member</title>
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
</head>
<body>
    <h1 style="text-align: center; font-family: 'Merriweather', serif;"> Enter Member Data </h1>

<form form action="insertmem.php" method="post">
<div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">SSN</label>
    <input type="number" class="form-control" id="ssn" name= "ssn">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">First Name</label>
    <input type="text" class="form-control" id="fname" name= "fname">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Middle Name</label>
    <input type="text" class="form-control" id="mname" name= "mname">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Last Name</label>
    <input type="text" class="form-control" id="lname" name= "lname">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Phone</label>
    <input type="number" class="form-control" id="phone" name= "phone">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Home Mailing Address</label>
    <input type="text" class="form-control" id="haddress" name= "haddress">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Campus Address</label>
    <input type="text" class="form-control" id="caddress" name= "caddress">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Date of joining</label>
    <input type="text" class="form-control" id="date" name= "dateofjoining">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Is Active</label>
    <input type="number" class="form-control" id="isactive" name= "isactive">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Member Type</label>
    <input type="number" class="form-control" id="memtype" name= "memtype">
  </div>
  </div>
  <button class="btn btn-default">Cancel</button>
  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
</form>

</body>
</html>