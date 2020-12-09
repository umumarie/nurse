<?php require_once('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Camillia Home Page</title>
</head>
<body bgcolor="green">

<fieldset style="width: 400px;border: solid red;border-radius: 12px">
<center>
<fieldset style="background-color: silver;width: 300px;height: 100px">
	<legend>Create User</legend>
<form method="POST">

	<table style="height: 100px">
		<tr>
			<td>
				User Name</td>
				<td>:
			</td>
			<td>
				<input type="text" name="username">
			</td>
		</tr>


		<tr>
			<td>
				Password</td>
				<td>:
			</td>
			<td>
				<input type="Password" name="passsword">
			</td>
		</tr>





		<tr>
			
			<td><input type="submit" name="usercreate" value="Save"></td>
		</tr>
	</table>
	</form>
</fieldset>
</center>
</fieldset>

</body>
</html>

<?php
require_once('connection.php');

if (isset($_POST['usercreate'])) {
	
	$username=$_POST['username'];
	$password=$_POST['passsword'];

	$createuser="INSERT INTO users SET 
UserName='$username',Password='$password'";

$query=mysqli_query($con,$createuser);


if ($query) {
	echo "User Created!";
}


header('location:index.php');

}

?>

<?php
require_once('footer.php');

?>