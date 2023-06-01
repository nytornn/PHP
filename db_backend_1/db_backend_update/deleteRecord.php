<?php
class deleteRecord
{
    private $conn;

    public function __construct($host, $username, $password, $database)
    {
        $this->conn = new mysqli($host, $username, $password, $database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function deleteRecord($id)
    {
        if (is_numeric($id) && $id > 0) {
            $id = $this->conn->real_escape_string($id);

            $deleteBookQuery = "DELETE FROM kniha WHERE autor_id = '$id'";
            $this->conn->query($deleteBookQuery);

            $deleteAuthorQuery = "DELETE FROM autor WHERE id = '$id'";
            $this->conn->query($deleteAuthorQuery);
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

$connector = new deleteRecord($host, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["delete_id"];
    $connector->deleteRecord($id);
}

header("Location: index.php");
exit();
?>