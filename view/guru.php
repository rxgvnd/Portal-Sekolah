<?php 
session_start();
include '../include/db_config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Teacher</title>

	<link href="../extra/css/main10.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
		   $('#example').DataTable();
		} );
	</script>

    <style>
        #logout{
            transition-duration: 1s;
        }
        #logout:hover{
            background-color: aqua;
            color: white;
        }
    </style>
</head>
<body style="color: black;" class="row">
	<div class="container" style="float: left;">
		<img src="../extra/images/welcome.png" alt="welcome" style="width: 865px; height: 225px;">
		<div class="col-12 center" style="color: black;">
			<h1>
			<?php 
				echo "Hello, " . ucwords(strtolower($_SESSION['first_name'])); 
			?>
			</h1>
        </div>
	<nav class="navbar">
		<li><<a href="../controller/logout.php" id="logout">LOG OUT</a></li>

	</nav>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
                <th> ID User</th>
				<th> Nilai Tugas</th>
				<th> Nilai UTS </th>
                <th> Nilai UAS </th>
				<th> Action </th>
			</tr>
		</thead>
		<tbody>
        <?php
		$query = "SELECT  *  from grade";
        $result = mysqli_query($db,$query);
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $row['user_id'] . "</td>";
					echo "<td>" . $row['nilai_tugas']. "</td>";
                    echo "<td>" . $row['nilai_uts'] . "</td>";
                    echo "<td>" . $row['nilai_uas'] . "</td>";
					echo '<td>
					<div style="display:flex; justify-content:space-evenly;">
					<form action="../view/edit_guru.php" method="post">
						<input style="display:none;" type="text" name="Update" value="'.$row['user_id'].'"></input>
						<button class="btn btn-info">Edit</button>
					</form>
					<br>
					</div>
					</td>';
					echo "</tr>";
				}

				
			 ?>
		</tbody>
	</table>
    </div>

    </body>
    </html>