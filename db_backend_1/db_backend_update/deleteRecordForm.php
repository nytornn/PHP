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
<form action="deleteRecord.php" method="POST">
        <label for="delete_id">Vymaž záznam knihy</label>
        <input type="text" id="delete_id" name="delete_id" placeholder="Zadej ID"><br>
        <input type="submit" value="Vymazat knihu">
    </form>
</body>
</html>
