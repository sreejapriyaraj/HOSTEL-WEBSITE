<?php
$con=mysqli_connect("localhost","root","","hosteldata")
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>CMR Hostels</title> 
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body style="background-image: url(img/index2.jpg); height: 50%; background-position: center; background-repeat: no-repeat; background-size: cover;">
  <?php
  include "header.php";
  $name1= $_POST["name"];
  $email1= $_POST["email"];
  $college1= $_POST["College"];
  $branch1= $_POST["Branch"];
  $year1= $_POST["Year"];
  $block1= $_POST["Block"];
  $contact1= $_POST["contact"];
  $address1= $_POST["address"];
  $city1= $_POST["city"];
  $sq="INSERT into hosteldata.udata (name,email,college,branch,year,block,contact,city,address) values ('$name1','$email1','$college1','$branch1','$year1','$block1','$contact1','$city1','$address1');";
    $sr=mysqli_query($con,$sq);
  if ($block1=="NORTH"){
    $sq="INSERT into hosteldata.nbdata (name,email,college,branch,year,block,contact,city,address) values ('$name1','$email1','$college1','$branch1','$year1','$block1','$contact1','$city1','$address1');";
    $sr=mysqli_query($con,$sq);
  }elseif($block1=="SOUTH"){
    $sq="INSERT into hosteldata.sb (name,email,college,branch,year,block,contact,city,address) values ('$name1','$email1','$college1','$branch1','$year1','$block1','$contact1','$city1','$address1');";
    $sr=mysqli_query($con,$sq);
  }
  elseif($block1=="EAST"){
    $sq="INSERT into hosteldata.ebdata (name,email,college,branch,year,block,contact,city,address) values ('$name1','$email1','$college1','$branch1','$year1','$block1','$contact1','$city1','$address1');";
    $sr=mysqli_query($con,$sq);
  }
  else{
    $sq="INSERT into hosteldata.wbdata (name,email,college,branch,year,block,contact,city,address) values ('$name1','$email1','$college1','$branch1','$year1','$block1','$contact1','$city1','$address1');";
    $sr=mysqli_query($con,$sq);
  }
  
  ?>
  <div class="inner-banner-image" >
          <div class="banner-content">
            <h1>Hello.<?php echo $name1;?> Welcome to CMR Hostels</h1>
            <h3>Your room  is in <?php echo $block1;?> Block.</h3>
          </div>
        </div>
  <?php
  include "footer.php";
  ?>
</body>
</html>
