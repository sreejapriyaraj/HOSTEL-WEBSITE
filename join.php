<?php
$con=mysqli_connect("localhost","root","","hosteldata")
?><!DOCTYPE html> 
  <head> 
    <!---- The page has a title Lifestyle Store-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>CMR Hostels</title> 
    <!---- External css file index.css placed in the folder css is linked -->
    <link rel="stylesheet" type="text/css" href="css/index.css"> 
  </head> 
  <body style="background-image: url(img/index2.jpg); height: 50%; background-position: center; background-repeat: no-repeat; background-size: cover;"> 
    <?php
    include "header.php";
    $noofroomsN=250;
  $noofroomsS=250;
  $noofroomsE=250;
  $noofroomsW=250;
  $sqe="SELECT name from ebdata";
    $sre=mysqli_query($con,$sqe);
    $rowe=mysqli_num_rows($sre);
    $sqn="SELECT name from nbdata";
    $srn=mysqli_query($con,$sqn);
    $rown=mysqli_num_rows($srn);
    $sqw="SELECT name from wbdata";
    $srw=mysqli_query($con,$sqw);
    $roww=mysqli_num_rows($srw);
    $sqs="SELECT name from sb";
    $srs=mysqli_query($con,$sqs);
    $rows=mysqli_num_rows($srs);
    ?>
    <div class="container" style="margin: 60px 100px 10px 100px; color: white;">
    <div class="row" >
        <div class="col-md-6 col-sm-12" style="background-color: rgba(0, 0, 0, 0.7);">
          <center><h2>FOR BOYS</h2></center>
        </div>
        <div class="col-md-6 col-sm-12" style="background-color: rgba(0, 0, 0, 0.7);">
          <center><h2>FOR GIRLS</h2></center>
        </div>
        <div class="col-md-3 col-sm-6" style="background-color: rgba(0, 0, 0, 0.7);">
          <center><h3>NORTH BLOCK</h3>
            <p>NO of Rooms:<?php  echo $noofroomsN; ?></p>
          <p>Vacancies:<?php  echo $noofroomsN-$rown; ?></p>
          <p>Filled:<?php echo $rown;?></p></center>
        </div>
          <div class="col-md-3 col-sm-6" style="background-color: rgba(0, 0, 0, 0.7);">
        <center><h3>SOUTH BLOCK</h3>
          <p>NO of Rooms:<?php  echo $noofroomsS; ?></p>
          <p>Vacancies:<?php  echo $noofroomsS-$rows; ?></p>
          <p>Filled:<?php echo $rows;?></p></center></div>
          <div class="col-md-3 col-sm-6" style="background-color: rgba(0, 0, 0, 0.7);">
        <center><h3>EAST BLOCK</h3><p>NO of Rooms:<?php  echo $noofroomsE; ?></p>
          <p>Vacancies:<?php  echo $noofroomsE-$rowe; ?></p>
          <p>Filled:<?php echo $rowe;?></p></center></div>
          <div class="col-md-3 col-sm-6" style="background-color: rgba(0, 0, 0, 0.7);">
            <center><h3>WEST BLOCK</h3><p>NO of Rooms:<?php  echo $noofroomsW; ?></p>
          <p>Vacancies:<?php  echo $noofroomsW-$roww; ?></p>
          <p>Filled:<?php echo $roww;?></p></center>
        </div>
      </div></div>
    <div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-xs-offset-4">
          <div class="panel panel-primary" style="margin-top:60px;">
            <div class="panel-heading">
              <h4>JOIN </h4>
            </div>
            <div class="panel-body">
              <form method="POST" action="data.php">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" name="name"></div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="College" name="College">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Branch" name="Branch">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Year" name="Year">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Select Block:North/South/East/West" name="Block">
                </div>
                 <div class="form-group">
                  <input type="text" class="form-control" placeholder="Contact" name="contact">
                </div>
                 <div class="form-group">
                  <input type="text" class="form-control" placeholder="City" name="city">
                </div>
                 <div class="form-group">
                  <input type="text" class="form-control" placeholder="Address" name="address">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form><br>
            </div>
          </div>
        </div>
      </div>
    </div></div>
    <?php
    include "footer.php";?>
  </body> 
</html> 