<?php require_once('header.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Post Update</title>
</head>
<body bgcolor="green">

<?php
require_once('footer.php');

?>

		

		







<?php
require_once('connection.php');

if (isset($_POST['createpost'])) {
	$PostId=$_GET['PostId'];
	$postname=$_POST['postname'];


	$insert="UPDATE post SET PostName='$postname' WHERE PostId='$PostId'";

	$query=mysqli_query($con,$insert);


	header('location:viewpost.php');

	
}
?>













<?php
require_once('connection.php');

if (isset($_GET['PostId'])) {
	
	$PostId=$_GET['PostId'];


$del="SELECT * FROM post WHERE PostId='$PostId'";

$query=mysqli_query($con,$del);


while ($row=mysqli_fetch_array($query)) {
	$postname=$row['PostName'];?>


	<fieldset style="background-color: silver;width: 300px;height: 80px">
	<legend>Create a Post</legend>
<form method="POST">
	<table>
	<tr>
			<td>
				Post Name
			</td><td>:</td>
			<td>
				<input type="text" name="postname" value="<?php echo $postname;?> ">
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
<?php }}
?>
</body>
</html>