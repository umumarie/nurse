<?php require_once('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Post Creation</title>
</head>
<body bgcolor="green">








<center>
<fieldset style="width: 600px;height:315px;border: solid green">
<table>
<tr>
<td>
<a href="index.php"><button>Home</button></a></td>


<td>
<a href="viewpost.php"><button>View Posts</button></a></td>



<td>
<a href="createcandidate.php"><button>Candidate</button></a></td>
<td>
<a href="report.php"><button>Report</button></a></td>
</tr>
</table>


<fieldset style="background-color: green; width: 900px;border: solid black;border-radius: 14px">
<center>
<fieldset style="width: 750px;background-color: darkred;color: white">
	<legend style="color: yellow;background-color: silver;border-radius: 14px">Create a Post</legend>
<form method="POST">
	<table>
		<tr>
			<td>
				Post Name
			</td><td>:</td>
			<td>
				<input type="text" name="postname">
			</td>
		</tr>

		<tr>
			<td colspan="3">
				<input type="submit" name="createpost" value="createpost">
			</td>
		</tr>
	</table>

</form>


</fieldset>

</fieldset>
</center>

<?php
require_once('connection.php');

if (isset($_POST['createpost'])) {
	
	$postname=$_POST['postname'];


	$insert="INSERT INTO post SET PostName='$postname'";

	$query=mysqli_query($con,$insert);

	if ($query) {
		echo "post created!";
	}

	header('location:activities.php');
}
?>


</body>
</html>

<?php
require_once('footer.php');

?>