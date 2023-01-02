<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>username</label>
     	<input type="text" name="username" placeholder="username"><br>

     	<label>password</label>
     	<input type="password" name="password" placeholder="password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>