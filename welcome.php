
<?php
// Initialize the session
session_start();


 
// Define variables and initialize with empty values
$source ="";
$destination =  "";

 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  margin:0;
  font-family: "Lato", sans-serif;
}

.sidepanel  {
  width: 0;
  position: fixed;
  z-index: 1;
  height:100%;
  top: 0;
  left: 0;
  background-image: url('images/bg-01.jpg');
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidepanel a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidepanel a:hover {
  color: #f1f1f1;
}

.sidepanel .closebtn {
  position: absolute;
  top: 0;
  right: 25px;

  
}

.openbtn {
  height:60px;
width:100%;
  font-size: 20px;
  cursor: pointer;
  background-image: url('images/bg-01.jpg');
  color: white;
  padding: 10px 15px;
  border: none;
  text-align:left;
 
}

.openbtn:hover {
  background-color:#444;
}
.searchbox{
  height:115px;
  width:100%;
  background-image: url('images/bg-01.jpg');
}
.box{
  margin-top:5px;
  margin-left:30px;
  padding-left:20px;
  size:6px;
  height:40px;
  width:260px;
  border-width:0px;
  background-color:white;
  border-image: url('images/bg-01.jpg');
 
}
input:focus, textarea:focus, select:focus{
        outline: none;
    }
 .nextbtn a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

#fixedbtn {
    position: fixed;
    bottom: 0px;
    right:0px;
  
    width:50px;
    height:60px;
    
    border:none;
    
}
.nextbtn span:hover {
  background-color:#ba007a;
  color: white;
}
.next {
  background-color:#ba007a;
  color: white;
  text-align:center;
}

.round {
  border-radius: 50%;
}
.profilesection{
  margin-top:20px;
  font-size: 15px;
  height:80%;
  width:100%;
  padding:12px;
  
  background-color:white;
  color:black;
  
}
hr{
  width:80%;
  
  }
  img {
  border-radius: 50%;
}
.user{
  color:white;

}
</style>
</head>
<body>

<div id="mySidepanel" class="sidepanel">
  
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><font  style="color:white" size="20">×</font></a>
  <div class="user">
  <center><img src="images/dp.jfif" alt="Avatar" style="width:80px">
  <h2>Hi,<span>
  <?php echo htmlspecialchars($_SESSION["username"]); ?></h2></span></center>
  </div>
 
  
  
 <div class="profilesection">
  <a href="profile.php"><i class='far fa-user'></i>&#160; Profile</a>
  <a href="resetpassword.php"><i class='fas fa-unlock'></i>&#160; Reset Password</a>
  <a href="Transaction.php"><i class='fa fa-money'></i>&#160; Transaction</a>
  <a href="logout.php"><i class='fas fa-power-off'></i>&#160; Signout</a>

</div>
</div>

<button class="openbtn" onclick="openNav()">☰ Elokyan</button>  
<div class="searchbox">
<form  action="welcome2.php" method="post">
<!-- <input type="text"  class="box" placeholder="source" name="source" value="<?php echo $source; ?>"><br> -->
<select  name="source">
  <option value="BARDI">Bardi</option>
  <option value="LOKMAT">Lokmat</option>
</select>
 <!-- <input type="text"  class="box" placeholder="destination" name="destination" value="<?php echo $destination; ?>"> -->
 <select name="destination">
  <option value="TRUPTI">trupti</option>
  <option value="PALLOTI">palloti</option>
</select>
 <div class="nextbtn">
 
<span  id ="fixedbtn"class="next round" ><font  size="20"><input type="submit" value="&#8250"></font></span>
</div>
</form>
</div>

<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>
   
</body>
</html> 
