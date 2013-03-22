<!DOCTYPE html>
<html>
	<head>
		<title>Sample Post Page</title>
	</head>
	<body>
		<!-- A form to create a post -->
		<form method="post" action="post_receive.php">
			<input type="text" name="First Name" placeholder="First Name" />
			<input type="text" name="Last Name" placeholder="Last Name" />
			
			<select name="selection">
				<option>Today</option>
				<option>Tomorrow</option>
			</select>
			
			<input type="submit" value="Submit" />
		
		</form>
	</body>
</html>