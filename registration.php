
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	
	<form method="POST" action="signin.php">
		<fieldset style="width:100px">
			<legend><h3>REGISTRATION</h3></legend>

					<b>Id </b><br>
					<input type="text" name="id"  /><br>
				<b>Password</b><br>
					<input type="password" name="password" /><br>
				<b>Confirm Password</b><br>
					<input type="password" name="cpassword" /><br>
	
					<b>Name</b> <br>
					<input type="text" name="name"  /><br>
					<b>
						Email <br>
					</b>
					<input type="Email" name="email">
		<b>User Type</b><hr>
					
						<select>
							<option>NONE</option>
  <option value="user">user</option>
  <option value="admin">admin</option>
</select>
					
				
				<hr>
				<br>
						<input type="submit" name="submit" value="Register"> <a href="signin.html">Login</a>
		
		</fieldset>
	</form>
</body>
</html>