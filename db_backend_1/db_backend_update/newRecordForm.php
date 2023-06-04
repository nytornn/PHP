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
<form action="newRecord.php" method="POST">
        <label for="author_name">Jméno autora:</label>
        <input type="text" id="author_name" name="author_name"> <br>

        <label for="book_name">Název knihy:</label>
        <input type="text" id="book_name" name="book_name"> <br>

        <label for="year">Rok vydání:</label>
        <input type="text" id="year" name="year"> <br>

        <input type="submit" value="Přidat knihu">
    </form>
</body>
</html>