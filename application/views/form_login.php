<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h3>Form Login</h3>
	<form action="<?php echo site_url('login/aksi_login'); ?>" method="POST">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td> </td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
		
	</form>

</body>
</html>