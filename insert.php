<?php
	$connect = mysqli_connect('localhost','root','','awani');
	$num = $_POST['hidd'];
		$s = "insert into student(f_name,last_name)values";
	for ($i=0; $i < $num; $i++)
	{ 
		$fname = $_POST['fname'][$i];
		$lname = $_POST['lname'][$i];
		$s .= "('$fname','$lname'),";
	}
	$s = rtrim($s,',');
	echo "Data saved";
	$result = mysqli_query($connect,$s);

?>