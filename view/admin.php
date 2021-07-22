<?php 
session_start();
include '../include/db_config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Admin</title>

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
				echo "Hello, " . ucwords(strtolower($_SESSION['role_name'])); 
			?>
			</h1>
        </div>
        <nav class="navbar">
			<li><a href="../view/add_admin.php">Add User</a></li>
            <li><a href="../profile.php">Coder's Profile</a></li>
            <li><<a href="../controller/logout.php" id="logout">LOG OUT</a></li>
        </nav>
    
	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th> ID </th>
				<th> Nama </th>
				<th> Role </th>
				<th> Action </th>
			</tr>
		</thead>
		<tbody>
        <?php
								
        $query = "SELECT  *  from user JOIN role on role.role_id = user.role_id where user_id > 1000";
        $result = mysqli_query($db,$query);

				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $row['user_id'] . "</td>";
					echo "<td>" . $row['first_name'] . ' ' . $row['last_name'].  "</td>";
					echo "<td>" . ucwords(strtolower($row['role_name'])) . "</td>";
					echo '<td>
					<div style="display:flex; justify-content:space-evenly;">
					<form action="../view/view_admin.php" method="post">
						<input style="display:none;" type="text" name="Update" value="'.$row['user_id'].'"></input>
						<button class="btn btn-info">View</button>
					</form>
					<form action="../controller/admin_delete.php" method="post">
						<input style="display:none;" type="text" name="Delete" value="'.$row['user_id'].'"></input>
						<button class="btn btn-danger" onclick="javascript:return confirm(\'Are you sure you want to delete this?\');">Delete</button>
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
	</div>
    </body>
    </html>