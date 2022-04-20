<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "logsign");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$username = $_REQUEST['username'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$Branch = $_REQUEST['Branch'];
		$phonenumber = $_REQUEST['phonenumber'];
		$roomnumber = $_REQUEST['roomnumber'];
		$rollnumber = $_REQUEST['rollnumber'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO userdata VALUES ('$username',
			'$email','$password','$branch','$phonenumber', '$roomnumber', '$rollnumber')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>
