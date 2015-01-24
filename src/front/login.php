<?php 
	session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>User Login</title>
 </head>
 <body>
 	<form id="form01" action="../action/LoginAction.php" method="post">
 		<table>
 		<tr>
 			<td>User:</td>
 			<td><input type="text" name="username" /></td>
 		</tr>
 		<tr>
 			<td>Password:</td>
 			<td><input type="password" name="password" /></td>
 		</tr>
 		<tr>
 			<td><input type="reset" value="reset" /></td>
 			<td><input type="submit" value="submit" /></td>
 		</tr>
 		</table>
 	</form>
 </body>
 </html>