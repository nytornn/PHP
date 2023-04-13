<!DOCTYPE html>
<html>
<head>
	<title>Beer List</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
			color: #333;
		}
	</style>
</head>
<body>
	<h1>Beer List</h1>
	<table>
		<tr>
			<th>Name</th>
			<th>Brand</th>
			<th>Alcohol</th>
		</tr>
		<?php require "beer.php"; ?>
		<?php foreach ($content_array as $beer): ?>
			<tr>
				<td><?php echo $beer['name']; ?></td>
				<td><?php echo $beer['brand']; ?></td>
				<td><?php echo $beer['alcohol']; ?>%</td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>