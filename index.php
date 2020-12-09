<?php require_once('header.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>Camillia Home Page</title>
</head>

<body bgcolor="green">
<center>
<fieldset style="width: 600px;height:315px;border: solid green">
<fieldset style="background-color: green; width: 900px;height: 300px;border: solid black;border-radius: 14px">
<center>
<fieldset style="width: 400px;border: solid red;border-radius: 12px">
<center>
<fieldset style="background-color: silver;width: 300px;height: 100px">
	<legend style="background-color: skyblue;border-radius: 7px">Login Here!</legend>

<form method="POST">
	<table style="height: 70px">
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
			<td colspan="0">
				<input type="submit" name="login" value="Login" style="border: solid black;border-radius: 6px">
			</td>
			<td colspan="2"><p>Click <a href="usercreate.php" style="border-radius: 6px">Here</a> to create user</p></td>
		</tr>
	</table>
	</form>
</fieldset>
</center>
</fieldset>
</center>
</fieldset>
</fieldset>
</center>
</body>
</html>

<?php
require_once('connection.php');

if (isset($_POST['login'])) {

	$username=$_POST['username'];
	$password=$_POST['passsword'];
	
	$select="SELECT UserName
,Password FROM users WHERE UserName='$username' AND Password='$password'";

$query=mysqli_query($con,$select);


if (mysqli_num_rows($query)) {
	while ($row=mysqli_fetch_assoc($query)){

		$session['UserId']=$row['UserId'];

		header('location:activities.php');
		
	}
}
}

?>

<?php
require_once('footer.php');

?>