<?php
class editRecord
{
    private $conn;

    public function __construct($host, $username, $password, $database)
    {
        $this->conn = new mysqli($host, $username, $password, $database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getBook($id)
    {
        $query = "SELECT * FROM kniha JOIN autor ON kniha.autor_id = autor.id WHERE kniha.book_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $book = $result->fetch_assoc();
        $stmt->close();
        return $book;
    }

    public function updateBook($id, $authorName, $bookName, $year){
    $record = $this->getBook($id);

    if (!$record) {
        echo "Kniha nebyla nalezena";
        return;
    }

    if (!empty($authorName)) {
        $record['author_name'] = $authorName;
    }
    if (!empty($bookName)) {
        $record['book_name'] = $bookName;
    }
    if (!empty($year) && is_numeric($year) && $year > 0) {
        $record['year'] = $year;
    }

    $query = "UPDATE kniha JOIN autor ON kniha.autor_id = autor.id SET kniha.book_name = ?, kniha.year = ?, autor.name = ? WHERE kniha.book_id = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("sisi", $record['book_name'], $record['year'], $record['author_name'], $id);
    if ($stmt->execute()) {
        echo "Záznam byl úspěšně aktualizován";
    } else {
        echo "Chyba při aktualizaci záznamu: " . $stmt->error;
    }
    $stmt->close();
}
}

$host = "localhost";
$username = "root";
$password = "";
$database = "authors";

$connector = new editRecord($host, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $authorName = $_POST["author_name"];
    $bookName = $_POST["book_name"];
    $year = $_POST["year"];

    $connector->updateBook($id, $authorName, $bookName, $year);
}

header("Location: index.php");
exit();
?>