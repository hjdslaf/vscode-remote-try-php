<?php
class SachModel {
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

    public function getAllBooks() {
        $conn = $this->dbConnect();
        $sql = "SELECT Sach.MaSach, Sach.TenSach, Sach.SoLuong, User.TenUser
                FROM Sach
                INNER JOIN User ON Sach.MaUser = User.MaUser";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
}
?>
