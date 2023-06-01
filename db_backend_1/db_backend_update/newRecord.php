<?php
class newRecord
{
    private $conn;

    public function __construct($host, $username, $password, $database)
    {
        $this->conn = new mysqli($host, $username, $password, $database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function addNewRecord($authorName, $bookName, $year)
    {
        if (!empty($authorName) && !empty($bookName) && is_numeric($year) && $year > 0) {
            $authorName = $this->conn->real_escape_string($authorName);
            $bookName = $this->conn->real_escape_string($bookName);
            $year = $this->conn->real_escape_string($year);

            $authorQuery = "SELECT * FROM autor WHERE name = '$authorName'";
            $authorResult = $this->conn->query($authorQuery);

            if ($authorResult->num_rows > 0) {

                $authorRow = $authorResult->fetch_assoc();
                $authorId = $authorRow["id"];


                $insertBookQuery = "INSERT INTO kniha (book_name, year, autor_id) VALUES ('$bookName', '$year', '$authorId')";
                $this->conn->query($insertBookQuery);
            } else {

                $insertAuthorQuery = "INSERT INTO autor (name) VALUES ('$authorName')";
                $this->conn->query($insertAuthorQuery);

                $authorId = $this->conn->insert_id;

                $insertBookQuery = "INSERT INTO kniha (book_name, year, autor_id) VALUES ('$bookName', '$year', '$authorId')";
                $this->conn->query($insertBookQuery);
            }
        }
    }

    public function closeConnection()
    {
        $this->conn->close();
    }
}

$host = "localhost";
$username = "root";
$password = "";
$database = "authors";

$connector = new newRecord($host, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $authorName = $_POST["author_name"];
    $bookName = $_POST["book_name"];
    $year = $_POST["year"];

    $connector->addNewRecord($authorName, $bookName, $year);
}


header("Location: index.php");
exit();
?>
