<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Track Your Application - Jamnagar Municipal Cor.</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

	<div class="container mt-5">
		<?php
		session_start();
		require 'dbcon.php';

		$mobile = $_POST['mobile'];

		if (empty($mobile)) {
			$make = '<div class="alert alert-warning">You must type a word to search!</div>';
		} else {
			$make = '<div class="alert alert-warning">No match found!</div>';
			// Using prepared statement to prevent SQL injection
			$sele = "SELECT * FROM forms WHERE mobile = ?";

			// Initialize a prepared statement
			$stmt = mysqli_stmt_init($con);

			// Prepare the SQL statement
			if (mysqli_stmt_prepare($stmt, $sele)) {
				// Bind the parameter to the prepared statement as a string
				mysqli_stmt_bind_param($stmt, "s", $mobile);

				// Execute the prepared statement
				mysqli_stmt_execute($stmt);

				// Get the result set from the prepared statement
				$result = mysqli_stmt_get_result($stmt);

				echo '<h2>Track Your Application - Jamnagar Municipal Cor.</h2>';

				if (mysqli_num_rows($result) > 0) {
					echo '<div class="table-responsive">';
					echo '<table class="table table-bordered">';
					echo '<thead class="thead-dark">';
					echo '<tr>';
					echo '<th>ID</th>';
					echo '<th>Full Name</th>';
					echo '<th>Mobile</th>';
					echo '<th>Remark</th>';
					echo '<th>Status</th>';
					echo '</tr>';
					echo '</thead>';
					echo '<tbody>';

					while ($row = mysqli_fetch_assoc($result)) {
						echo '<tr>';
						echo '<td>' . $row['id'] . '</td>';
						echo '<td>' . $row['fullname'] . '</td>';
						echo '<td>' . $row['mobile'] . '</td>';
						echo '<td>' . $row['remark'] . '</td>';
						echo '<td>' . $row['fstatus'] . '</td>';
						echo '</tr>';
					}

					echo '</tbody>';
					echo '</table>';
					echo '</div>';
				} else {
					echo $make;
				}

				// Close the prepared statement
				mysqli_stmt_close($stmt);
			} else {
				echo "Error in preparing the statement.";
			}

			mysqli_close($con);
		}
		?>

	</div>

	<!-- Include Bootstrap JS and dependencies -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>