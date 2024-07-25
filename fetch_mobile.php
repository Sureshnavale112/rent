<?php
	include_once('connect.php');
	$mobile = $_POST['mobile'];
	$query=mysqli_query($con,"select * from tbl_admin where username = '$mobile'");
	//$row = mysqli_fetch_array($query);
	if(mysqli_num_rows($query) == 0)
	{
		
	}else
	{
		echo "Mobile Number Already Exists";
	}
	
?>

<?php
	include_once('connect.php');
	$mobile = $_POST['username'];
	$query=mysqli_query($con,"select * from tbl_admin where username = '$mobile'");
	//$row = mysqli_fetch_array($query);
	if(mysqli_num_rows($query) == 0)
	{
		
	}else
	{
		echo "Mobile Number Already Exists";
	}
	
?>