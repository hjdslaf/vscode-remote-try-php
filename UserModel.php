<?php
class UserModel {
    private function dbConnect() {
        $servername = "localhost";
        $db_username = "your_username";
        $db_password = "your_password";
        $dbname = "your_database";
        $conn = new mysqli($servername, $db_username, $db_password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    public function getUserByUsernameAndPassword($username, $password) {
        $conn = $this->dbConnect();
        $hashed_password = hash('sha256', $password);
        $sql = "SELECT id FROM Users WHERE username='$username' AND password='$hashed_password'";
        $result = $conn->query($sql);
        $conn->close();
        return $result->num_rows == 1;
    }
}
?>
