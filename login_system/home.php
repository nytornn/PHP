<?php 
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="home">
     <h1>Ahoj, <?php echo $_SESSION['username']; ?></h1>
	 <h1>typ uživatele:  <?php echo $_SESSION['rank']; ?></h1>
</body>
</html>

<?php 