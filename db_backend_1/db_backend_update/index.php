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
    <form action="newRecord.php" method="POST">
        <label for="author_name">Jméno autora:</label>
        <input type="text" id="author_name" name="author_name"> <br>

        <label for="book_name">Název knihy:</label>
        <input type="text" id="book_name" name="book_name"> <br>

        <label for="year">Rok vydání:</label>
        <input type="text" id="year" name="year"> <br>

        <input type="submit" value="Přidat knihu">
    </form>
        <br>
    <form action="deleteRecord.php" method="POST">
        <label for="delete_id">Vymaž záznam knihy</label>
        <input type="text" id="delete_id" name="delete_id" placeholder="Zadej ID"><br>
        <input type="submit" value="Vymazat knihu">
    </form>
</body>
</html>