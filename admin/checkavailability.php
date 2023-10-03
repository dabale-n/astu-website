<?php 
require_once("includes/config.php");
// code   username availablity
if(!empty($_POST["email"])) {
	$email= $_POST["email"];
$query=mysqli_query($con,"select AdminEmail from admintbl where AdminEmail='$email'");		
$row=mysqli_num_rows($query);
if($row>0){
echo "<span style='color:red'> email already exists. Try with another email</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
echo "<span style='color:green'> email available for Registration .</span>";
echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
?>
