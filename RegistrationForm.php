<html>
<head>
<title>Registration Form</title>
</head>
<body>
<br><br>
<center>
<form name="frmRegistration" method="post" action="action.php">
<table border="0" width="800" align="center">
<tr><th colspan=2>Registration Form</th></tr>
<tr><td>Username</td>
<td><input type="text" name="userName" value"></td>
</tr>
<tr><td>First Name</td>
<td><input type="text" name="firstName" value"></td>
</tr>
<tr><td>Last Name</td>
<td><input type="text" name="lastName" value"></td>
</tr>
<tr><td>Password</td>
<td><input type="password" name="password" value=""></td>
</tr>
<tr><td>Confirm Password</td>
<td><input type="password" name="confirm_password" value=""></td>
</tr>
<tr><td>Email</td>
<td><input type="text" name="userEmail" ></td>
</tr>
<tr><td>Gender</td>
<td><input type="radio" name="gender" id="gender" value="Male" > Male
<input type="radio" name="gender" id="gender" value="Female"> Female
</td>
</tr>
<tr>
<td></td>
<td><input type="checkbox" name="terms"> I accept Terms and
Conditions</td>
</tr>
<tr><th colspan=2>
<div><input type="submit" name="submit" value="Register" ></div>
</th></tr>
</table>
</form>
</body>
</html>