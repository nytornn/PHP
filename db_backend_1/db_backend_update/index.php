<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Evidence knih v knihovně - Seznam knih a jejich autorů.">
    <link rel="stylesheet" href="style.css">
    <title>Seznam knih</title>
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
    <table>
        <tr>
            <th>id</th>
            <th>jméno autora</th>
            <th>jméno knihy autora</th>
            <th>vydání knihy</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "authors");
        $query = "select * from autor join kniha  on autor.id=kniha.autor_id ";
        $result = $conn->query($query);

        if($result ->num_rows > 0){
            while($row = $result -> fetch_assoc()){
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["book_name"] . "</td><td>" . $row["year"] . "</td>";
            }
        }
        else{
            echo "Error";
        }
        $conn -> close();
        ?>
    </table>
</body>
</html>
