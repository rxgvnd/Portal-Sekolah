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
            <li><a href="../profile.php">Coder's Profile</a></li>
            <li><a href="admin.php">Back</a></li>
            <li><<a href="../controller/logout.php" id="logout">LOG OUT</a></li>
        </nav>
        <b>Detail Data User</b> <br><br>
        <table id="example" style="width:100%;  border-collapse: collapse;">
            <tr>
                <td style="padding: 20px; text-align: right; border-bottom: 1px solid #ddd;">ID</td>
                <td style="padding: 20px; text-align: left; border-bottom: 1px solid #ddd;">
                <?php
                    $id = $_POST['Update'];
                    $data = mysqli_query($db,"SELECT  *  from user where user_id='$id'");
                    while($d = mysqli_fetch_assoc($data)){
                        echo $d['user_id']; echo "<br>";
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td style="padding: 20px; text-align: right; border-bottom: 1px solid #ddd;">Nama</td>
                <td style="padding: 20px; text-align: left; border-bottom: 1px solid #ddd;">
                <?php
                    $id = $_POST['Update'];
                    $data = mysqli_query($db,"SELECT  *  from user where user_id='$id'");
                    while($d = mysqli_fetch_assoc($data)){
                        echo $d['first_name'] . " " . $d['last_name']; echo "<br>";
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td style="padding: 20px; text-align: right; border-bottom: 1px solid #ddd;">Role</td>
                <td style="padding: 20px; text-align: left; border-bottom: 1px solid #ddd;">
                <?php
                    $id = $_POST['Update'];
                    $data = mysqli_query($db,"SELECT  *  from user where user_id='$id'");
                    while($d = mysqli_fetch_assoc($data)){
                        echo $d['role_id']; echo "<br>";
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td style="padding: 20px; text-align: right; border-bottom: 1px solid #ddd;">Address</td>
                <td style="padding: 20px; text-align: left; border-bottom: 1px solid #ddd;">
                <?php
                    $id = $_POST['Update'];
                    $data = mysqli_query($db,"SELECT  *  from user where user_id='$id'");
                    while($d = mysqli_fetch_assoc($data)){
                        echo $d['address']; echo "<br>";
                    }
                ?>
                </td>
            </tr>
        </table>
             
        <br><br><b>Detail Data User</b> <br><br>
        
        <?php
            include '../include/db_config.php';
            $id = $_POST['Update'];
            $data = mysqli_query($db,"SELECT  *  from user where user_id='$id'");
	        while($d = mysqli_fetch_assoc($data)){
		?>

		<form action="../controller/update_admin.php" method="post" name="form1">
        <div class="form-group">
            <label for="email">ID</label>
            <input type="number" class="form-control" name="user_id"  required value="<?php echo $d['user_id']; ?>"> 
        </div>
        <div class="form-group">
            <label for="pwd">Nama Depan </label>
            <input type="text" class="form-control" name="first_name" required value="<?php echo $d['first_name']; ?>">
        </div>
        <div class="form-group">
            <label for="pwd">Nama Belakang </label>
            <input type="text" class="form-control" name="last_name" required value="<?php echo $d['last_name']; ?>">
        </div>
        <div class="form-group">
            <label for="pwd">Role</label>
            <input  type="text" class="form-control" name="role_id" required value="<?php echo $d['role_id']; ?>">
        </div>
        <div class="form-group">
            <label for="pwd">Alamat</label>
            <input  type="text" class="form-control " name="address" required value="<?php echo $d['address']; ?>">
        </div>
        <div class="form-group">
            <label for="pwd">Password</label><br>
            <input type="password" class="form-control"  name="password" >
        </div>
        <button name="Submit" type="submit" class="btn btn-info" style="margin-top:2em;">Submit</button>
		<a href="Admin.php"><input type="button" value="Cancel" class="btn btn-danger" style="margin-top:2em;"></button></a>
    </form>
	<?php 
	}
	?>
	</div>
	</div>
    </body>
    </html>