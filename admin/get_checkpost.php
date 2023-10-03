<?php
include('includes/config.php');
if(!empty($_POST["subcatid"])) 
{
 $id=intval($_POST['subcatid']);
$query=mysqli_query($con,"SELECT * FROM tblposts WHERE SubCategoryId=$id and Is_Active=1");
$row=mysqli_num_rows($query);
if ($row>0) {
    echo "<span style='color:red'>This Subcategory already posted. Go to manage subcategory if you want to edit</span>";
    echo "<script>$('#submit').prop('disabled',true);</script>";
}
else{
    echo "<span style='color:green'> Subcategory available for post .</span>";
    echo "<script>$('#submit').prop('disabled',false);</script>";
    }
}
?>