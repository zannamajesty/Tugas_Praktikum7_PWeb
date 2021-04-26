<html>
<head>
	<title>Membuat Program Login</title>	
</head>
<body>
	<h3>Halaman Login </h3> 
	<form method="post" action="hasillogin.php" > <!--membuat form yang ketika dikirim akan mengeksekusi file hasillogin.php -->	
		<table> <!-- membuat tabel dengan input type text-->
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Log In"></td>
			</tr>
		</table>
	</form>
</body>
</html>