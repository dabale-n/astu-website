<?php 
require_once("includes/config.php");
// code   username availablity
if(!empty($_POST["subcategory"])) {
	$subcat= $_POST["subcategory"];
$query=mysqli_query($con,"select Subcategory from subcategory where Subcategory='$subcat'");		
$row=mysqli_num_rows($query);
if($row>0){
echo "<span style='color:red'> Subcategory already exists. Try with another Subcategory</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
echo "<span style='color:green'> Subcategory available for post .</span>";
echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
?>
