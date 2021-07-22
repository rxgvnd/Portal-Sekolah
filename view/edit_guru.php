<!DOCTYPE html>
<html>
<head>
	<title>Edit Nilai</title>
	<link href="../extra/css/main10.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	
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
	<div class="container">
		<img src="../extra/images/welcome.png" alt="welcome" style="width: 865px; height: 225px;">
		<div class="col-12 center" style="color: black;">
		<h1>EDIT NILAI</h1>
	</div>
	<nav class="navbar">
		<li><a href="../profile.php">Coder's Profile</a></li>
		<li><<a href="../controller/logout.php" id="logout">LOG OUT</a></li>
	</nav>
 
	<?php
	include '../include/db_config.php';
	$id = $_POST['Update'];
	$data = mysqli_query($db,"SELECT  *  from grade where user_id='$id'");
	while($d = mysqli_fetch_assoc($data)){
		?>

		<form action="../controller/update_guru.php" method="post" name="form1">
        <div class="form-group">
            <label for="email">ID</label>
            <input  type="text" class="form-control" name="id" required value="<?php echo $d['user_id']; ?>"> 
        </div>
        <div class="form-group">
            <label for="pwd">Nilai Tugas</label>
            <input type="text" class="form-control" name="tugas" required value="<?php echo $d['nilai_tugas']; ?>">
        </div>
        <div class="form-group">
            <label for="pwd">Nilai UTS</label>
            <input  type="text" class="form-control" name="uts" required value="<?php echo $d['nilai_uts']; ?>">
        </div>
        <div class="form-group">
            <label for="pwd">Nilai UAS</label>
            <input  type="text" class="form-control " name="uas" required value="<?php echo $d['nilai_uas']; ?>">
        </div>
        <button name="Submit" type="submit" class="btn btn-info" style="margin-top:2em;">Submit</button>
		<a href="guru.php"><input type="button" value="Cancel" class="btn btn-danger" style="margin-top:2em;"></button></a>
    </form>
	<?php 
	}
	?>
</div>
</body>
</html>