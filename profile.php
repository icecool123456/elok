<?php
// Initialize the session
session_start();


 

 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>

<html>

<head>
  
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<style>
 .profile-header{
	background-image: url('images/bg-01.jpg');; height:200px;
}.user-detail{
	margin:-50px 0px 30px 0px;
}
.user-detail img{
	height:25vhpx;
	width:25vwpx;
}


.row-full{width:100vw;position:relative; margin-left: -50vw;left: 50%;}input[type="file"] {
  display: none;
}

img {
  cursor: pointer;
}


label{
width:250px;
}
.myButton {
	box-shadow:inset 12px -2px 0px -3px #78c3eb;
	background:linear-gradient(to bottom, #c123de 5%, #a20dbd 100%);
	background-color:#c123de;
	display:inline-block;
	cursor:pointer;
	color:white;
	font-family:Arial;
	width:60%;
	height:100px;
	font-size:45px;
	font-weight:bold;
	padding:13px 66px;
	text-decoration:none;
	text-shadow:-2px 0px 0px #9b14b3;
}
.myButton:hover {
	background:linear-gradient(to bottom, #a20dbd 5%, #c123de 100%);
	background-color:#a20dbd;
}
.myButton:active {
	position:relative;
	top:1px;
}
.backarrow{position:fixed;
  margin-top:0;
  padding-left:20px;
  font-size:57px;}
  .backarrow h2:before {
    content: ' \2190';
    color:white;

}
</style>
</head>

<body >
  
    
<div class="container">        
      <div class="row-full">
              <div class="col-lg-12 col-sm-12 col-12 profile-header">
			  <div class="backarrow"><h2></h2></div>
</div>
        
 </div>
         
<div class="row-full user-detail">
              
   <div class="col-lg-12 col-sm-12 col-12">

<center>      <img class='rounded-circle img-thumbnail' onclick='return OpenFileBrowser(event)' src="images/dp.jfif" alt="" style="cursor:pointer;" /></center>

<input type="file" name="PicturePath" id="fileUpload" accept=".png,.jpg,.jpeg,.gif,.tif" />
<script>
function OpenFileBrowser(elem) {
    $('#fileUpload').click()
}
</script><br><br><br> 
              
<p align="center" style="font-size:40px;"><i class="fa fa-user fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<label id="l1"> <?php echo htmlspecialchars($_SESSION["username"]);  ?></label><span style="margin-left:6em"><button class="btn" id="edit"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></button></span></p><br><br>                
<p align="center" style="font-size:40px;"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<label id="l2">abcd@gmail.com</label> <span style="margin-left:6em"><button class="btn" id="edit1"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></button></span></p><br><br>
<p align="center" style="font-size:40px;"><i class="fa fa-lock fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<label id="l3">abcd_123</label> <span style="margin-left:6em"><button class="btn" id="edit2"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></button></span></p><br><br>               
<p align="center"><a align="center" href="#" class="myButton">Save</a><>          
</div>
</div>
</div>
</div>

</div>  
<script>


	$("#edit").click(function(){
		  $( "#l1" ).replaceWith( function() {
        return "<input type=\"text\" value=\"" + $( this ).html() + "\" />";
       });
   });

	$("#edit1").click(function(){
		  $( "#l2" ).replaceWith( function() {
        return "<input type=\"text\" value=\"" + $( this ).html() + "\" />";
       });
   });

	$("#edit2").click(function(){
		  $( "#l3" ).replaceWith( function() {
        return "<input type=\"text\" value=\"" + $( this ).html() + "\" />";
       });
   });
        $( "#save" ).click( function() {
                  $( "input[type=text]" ).replaceWith( function() {
        return "<label>" + $( this ).val() + "</label>";
    });
 });


</script>
</body>

</html>