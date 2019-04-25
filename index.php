<?php
include 'connection.php';

$conn = OpenCon();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cotabase</title>
	<link rel="stylesheet" href="CSS/main.css" type="text/css">
</head>
<body>
	<div id="page-container">
   		<div id="content-wrap">
     		<div id="header">
     			<div class="title">
					<h1>COTABASE</h1>
				</div>
				<div class="header-button">
					<a>Login</a>
				</div>
			</div>
			<div id="left-nav">
				<ul class="left-nav-list">
					<li>New Administrator</li>
					<li>All Employees</li>
					<li>Add Employee</li>
					<li>Remove Employee</li>
					<li>Search</li>
				</ul>
			</div>
			<div id="main">
				<?php 
					$sql = "SELECT * FROM Clients";
					$result = $conn -> query($sql);
					while($row = $result->fetch_assoc()) {
        				echo "Client ID: " . $row["client_id"]. " | Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    				}
				?>
			</div>
   		</div>
   		<footer id="footer"></footer>
 	</div>
</body>
</html>

<?php
CLoseCon($conn);
?>
