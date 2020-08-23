<?php
error_reporting(0);
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Transfer Credits..</title>
</head>
<body>
	<form action="" method="GET">
		From
		<input type="text" name="u1" value="">
		to
		<input type="text" name="u2" value="">
		amount = 
		<input type="text" name="amt" value="">

		<input type="submit" name="submit" value="Transfer">
	</form>

	<?php
	
			if($_GET['submit'])
			{
			$u1=$_GET['u1'];
			$u2=$_GET['u2'];
			$amt=$_GET['amt'];


			if($u1!="" && $u2!="" && $amt!="")
			{
				
				$query1= "UPDATE ACCOUNTS SET BALANCE = BALANCE + '$amt' WHERE NAME = '$u2' ";
				$data1= mysqli_query($conn, $query1);
				$query2= "UPDATE ACCOUNTS SET BALANCE = BALANCE - '$amt' WHERE NAME = '$u1' ";
				$data2= mysqli_query($conn, $query2);

				if ($data1 && $data2)
				{
					echo"Data Submit into Database";
					echo $bl1;
					echo $bl2;

				}
				else
				{
					echo "Error in Submition ";
				}

			}

			else
			{
				echo"All Fields are Required";
			}
		}
		else
		{
			echo "Enter All Required Fields And Submit.";
		}

	?>

	<br><br>
	<h3>....TO VIEW UPDATED DATA...</h3>
	<br>
	<a href="display.php">Click To View</a>
</body>
</html>
