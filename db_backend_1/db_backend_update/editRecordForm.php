<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<header>
        <nav>
            <ul>
                <li><a href="index.php">Zobrazit všechny záznamy</a></li>
                <li><a href="newRecordForm.php">Nový záznam</a></li>
                <li><a href="deleteRecordForm.php">Smazat záznam</a></li>
                <li><a href="editRecordForm.php">Upravit záznam</a></li>
            </ul>
        </nav>
    </header>
<body>
<form action="editRecord.php" method="POST">
        <label for="id">Zadejte id knihy(kterou chcete změnit):</label>
        <input type="text" id="id" name="id" value="<?php echo isset($record) ? $record['id'] : ''; ?>">
        <label for="author_name">Nové jméno autora:</label>
        <input type="text" id="author_name" name="author_name" value="<?php echo isset($record) ? $record['author_name'] : ''; ?>"><br>

        <label for="book_name">Nový název knihy:</label>
        <input type="text" id="book_name" name="book_name" value="<?php echo isset($record) ? $record['book_name'] : ''; ?>"><br>

        <label for="year">Nový rok vydání:</label>
        <input type="text" id="year" name="year" value="<?php echo isset($record) ? $record['year'] : ''; ?>"><br>

        <input type="submit" value="Upravit knihu">
    </form>
</body>
</html>