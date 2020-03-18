
<?php
session_start();


// code of html--------------------------------
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "   <meta charset='UTF-8'>";
echo " <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo   "<title>Document</title>";
echo '<link rel="stylesheet" type="text/css" href="css/forbus.css">';
echo '</head>';
echo "<body>";
echo '<div class="mainbox">';
echo '<div class="backarrow"><a href="welcome.php"><h2></h2></a></div><br>';
echo "</div>"   ;

require_once "config.php";
$src ="";
$destination =  "";
$src=$_SESSION['source'];
$destination=$_SESSION['destination'];
$sql = "SELECT * FROM buses";
$results = $link->query($sql);


$option=0;

foreach ($results as $result){
    $src1 = $result['pickup'];
    $destination1 = $result['destination'];
    $bus_no = $result['bus_no'];

        
    
    $sql1 = "SELECT * FROM intermediate WHERE source='$src1' and destination='$destination1' ";
    $tables = $link->query($sql1);
    foreach ($tables as $table){
     $table_name =  $table ['table_name'];

     
    
    $pt1 =0;
    $sql2 = "SELECT * from $table_name where places='$src' ";
    $pts = $link->query($sql2);
    foreach ($pts as $pt)
    {
        $pt1 = $pt['id'];
    
    }
    
    $pt2 =0;
    $sql2 = "SELECT * from $table_name where places='$destination' ";
    $pts = $link->query($sql2);
    foreach ($pts as $pt)
    {
        $pt2 = $pt['id'];
        
    }
    if ($pt1 == null or $pt2 == null or $pt1>$pt2)
    {
    break;
    }
    else{
    $option=1;
    echo ' <div class="box ">';
    echo' <div style="position:relative;right:80px;top:17px;";>source</div><div style="position:relative;left:100px;";>  destination</div>';
    echo'  <h2>';
   echo $bus_no ;

    echo'<span class="vertical"></span>';
    echo'<i>';
    echo $src1;
    echo' &nbsp</i>&#9472;&#9472;&#9472;<i class="fa fa-angle-right" style="font-size:24px;color:black" ></i>';
    echo' </i >&nbsp';
    echo  $destination1;
    echo'</h2>';
    echo" </div>";
    }


    
    
    }
}
if ($option==0)    
{echo ' <div class="box ">';
echo' <div style="position:relative;right:80px;top:17px;";>NO buses available !!!';
echo" </div>";   
}

echo '</body>';
echo '</html>' ; 


mysqli_close($link);
?>