<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>

    <link href="../extra/css/main10.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    
    <!-- <script type="text/javascript">
			$(document).ready(function() {
		   $('#example').DataTable();
		} );
	</script> -->

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
		<div class="container">
			<img src="../extra/images/welcome.png" alt="welcome" style="width: 865px; height: 225px;">
			<div class="col-12 center" style="color: black;">
			<h1>ADD NEW USER</h1>
        </div>
        <nav class="navbar">
            <li><a href="../profile.php">Coder's Profile</a></li>
            <li><<a href="../controller/logout.php" id="logout">LOG OUT</a></li>
        </nav>
        <form action="../controller/insert_admin.php" method="post" id="myform">
            <label>ID</label>
            <input type="text" class="form-control" name="user_id" required>
            <label>Nama Depan</label>
            <input type="text" class="form-control" name="first_name" required>
            <label>Nama Belakang</label>
            <input type="text" class="form-control" name="last_name" required>
            <label>Role</label><br>
            <select name="role_id" id="role_id">
            <option value="2">Guru</option>
            <option value="3">Murid</option>
            </select><br>
            <label>Address</label>
            <input type="text" class="form-control" name="address">
            <label>Password</label>
            <input type="password" class="form-control" name="password">
            <input type="submit" class="btn btn-info" style="margin-top:2em;">
            <a href="admin.php"><input type="button" value="Cancel" class="btn btn-danger" style="margin-top:2em;"></button></a>
        </form>
        
    </div>
    </body>
</html>