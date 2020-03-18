<!-- 
font-family: 'Baloo Chettan 2', cursive;
font-family: 'Righteous', cursive; -->

<?php
session_start();
require_once "config.php";

$src=$link->real_escape_string($_REQUEST['source']);
$destination=$link->real_escape_string($_REQUEST['destination']);
$sql = "SELECT * FROM price where pickup='$src' and destination='$destination' ";
$results = $link->query($sql);
$followingdata = $results->fetch_assoc();
$fare=$followingdata['fare'];
$_SESSION['source']=$src;
$_SESSION['destination']=$destination;
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2|Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body{
      margin:0;
    }
  .mainbox{
    height:250px;
    width:100%;
    background-image: url('images/dp2.png');
    background-size: cover;
    border-radius: 0 0  25px 25px;
    background-repeat:no-repeat;
    font-size:20px;
  }
  .backarrow{position:fixed;
  margin-top:0;
  padding-left:20px;}
  .backarrow h2:before {
    content: ' \2190';
    color:white;

}
.source{
  position:absolute;
  margin-top:60px;
  padding-left:40px;
  color:white;
 
  font-family: 'Baloo Chettan 2', cursive;
 
}
.destination{
 
  position:absolute;
  margin-top:60px;
  /* margin-left:30px; */
  padding-left:180px;
  color:white;
 
  font-family: 'Baloo Chettan 2', cursive;

}
.realso{
  position:absolute;
  margin-top:100px;
  padding-left:40px;
  color:white;
  font-size:30px;
  font-family: 'Righteous', cursive;
 
}
.realdes{
 
  position:absolute;
  margin-top:100px;
  /* margin-left:30px; */
  padding-left:180px;
  color:white;
  font-size:30px;
  font-family: 'Righteous', cursive;

}
a{
  text-decoration:none;
}

.forwardarrow{position:fixed;
  margin-top:36px;
  padding-left:125px;
  }
  .forwardarrow h2:before {
    content: ' \2192';
    
    color:white;

}
.rupee{
  position:fixed;
  margin-top:155px;
  padding-left:40px;
  color:white;
 
  
}
.rupee h1{
  font-family: 'Righteous', cursive;
}

.box {
  box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
;

  
  
  min-height: 100px;
  width: 88%;
  margin: 20px auto;
  background: white;
  border-radius: 5px;
}

@media only screen and (min-device-width: 597px) and (max-device-width: 874px) {
 .source{
  padding-left:140px;
}
.destination{
  padding-left:340px;
}
.realso{
   padding-left:140px;
  color:white;
 }
.realdes{
  padding-left:340px;
 }
.forwardarrow{
  padding-left:240px;
  }
.rupee{
  padding-left:140px;}
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
.source{
  padding-left:210px;
}
.destination{
  padding-left:410px;
}
.realso{
   padding-left:210px;
}
.realdes{
  padding-left:410px;
}
.forwardarrow{
  padding-left:310px;
}
.rupee{
  padding-left:210px;}
}
@media only screen and (min-device-width: 1024px) and (max-device-width: 1366px) {
 .source{
  padding-left:320px;
}
.destination{
  padding-left:520px;
}
.realso{
   padding-left:320px;
  color:white;
 }
.realdes{
  padding-left:520px;
 }
.forwardarrow{
  padding-left:420px;
  }
.rupee{
  padding-left:320px;}
}
.myButton {
	box-shadow: 4px 4px 0px 0px #e184f3;
	background:linear-gradient(to bottom, #c123de 5%, #a20dbd 100%);
	background-color:#c123de;
	border-radius:17px;
	border:3px solid #a511c0;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Verdana;
	font-size:24px;
	padding:8px 76px;
	text-decoration:none;
	text-shadow:1px 2px 0px #9b14b3;
	&:hover {
	background:linear-gradient(to bottom, #a20dbd 5%, #c123de 100%);
	background-color:#a20dbd;
}
 &:active {
	position:relative;
	top:1px;
}
 }
.Button {
	box-shadow: 4px 4px 0px 0px #e184f3;
	background:linear-gradient(to bottom, #c123de 5%, #a20dbd 100%);
	background-color:#c123de;
	border-radius:17px;
	border:3px solid #a511c0;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Verdana;
	font-size:24px;
	padding:10px 30px;
	text-decoration:none;
	text-shadow:2px 1px 0px #9b14b3;
	&:hover {
	background:linear-gradient(to bottom, #a20dbd 5%, #c123de 100%);
	background-color:#a20dbd;
}
 &:active {
	position:relative;
	top:1px;
}
 }     


  </style>
</head>
<body>
  <div class="mainbox">
    <div class="backarrow"><a href="welcome.php"><h2></h2></a></div><br>
    <!-- <div class="container content">
  <div class="row">
    <div class="col-sm-6">
      <h3>source</h3></div>
    <div class="col-sm-6">
      <h3>destination</h3> </div>
  </div>
</div> -->
<div class="source">source</div>
<div class="forwardarrow"><h2></h2></div>
<div class="destination">destination</div>
<div class="realso"><?php echo $src ?></div>
<div class="realdes"><?php echo $destination ?></div>

<i class="fa fa-rupee rupee" style="font-size:36px"> <?php echo $fare ?></i>
</div>

<br><br>

<center><a href="#" class="myButton">Pay</a></center><br>
<center><a href="forbus.php" class="Button">check buses </a></center> 

</body>
</html>