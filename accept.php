<?php
		$num = $_POST['num'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Form data</title>
</head>
<body>
		<form action="insert.php" method="post">
			<table width="30px" align="center" cellspacing="3px">
				
					<?php
						for ($i=1; $i<=$num; $i++) 
						{
						?>
							<tr>
								<td></td><th>New record</th>
							</tr>
							<tr>
							<th>First Name</th>
								<td><input type="text" name="fname[]"></td>
							</tr>
							<tr>
								<th>Last Name</th>
								<td><input type="text" name="lname[]"></td>
							</tr>
							

					<?php
					}
					?>
				<tr>
					<th><input type="hidden" name="hidd" value="<?php echo $num; ?>"></th>
					<td><input type="submit" name="submit" value="submit"></td>
				</tr>
			</table>

		</form>
</body>
</html>