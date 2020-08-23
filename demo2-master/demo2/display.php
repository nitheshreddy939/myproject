<style >

	*{
		margin: 0;
		padding: 0;
	}

	td{
		padding: 10px;
	}

</style>

<?php
		include 'connection.php';
		error_reporting(0);
		$query = "SELECT * FROM ACCOUNTS";
		$data = mysqli_query($conn, $query);
		$total = mysqli_num_rows($data);
		//$result = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Users List..</title>
</head>
<body>
<table border = 1 >
	<tr>
		<th>ID Number</th>
		<th>User</th>
		<th>Balance</th>
		<th>Transfer</th>
	</tr>


<?php
	if ($total != 0) 
	{

		while($result = mysqli_fetch_assoc($data))
		{
			echo "<tr>
					<td>".$result['id']."</td>
					<td>".$result['Name']."</td>
					<td>".$result['balance']."</td>
					<td><a href = transfer.php>Transfer</a></td>
				</tr>";
			echo "";

		}
		//echo"table has record";
	}
	else
	{
		echo"no record found";
	}
?>

</table>
</body>
</html>