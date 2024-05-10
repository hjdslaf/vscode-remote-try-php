<?php
session_start();

// Kiểm tra nếu người dùng đã đăng nhập, chuyển hướng đến trang sách
if (isset($_SESSION['user_id'])) {
    header("Location: sach.php");
    exit();
}

// Xử lý đăng nhập khi form được gửi đi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'UserModel.php';
    $userModel = new UserModel();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($userModel->getUserByUsernameAndPassword($username, $password)) {
        // Đăng nhập thành công, tạo session và chuyển hướng đến trang sách
        $_SESSION['user_id'] = $username;
        header("Location: sach.php");
        exit();
    } else {
        // Đăng nhập không thành công, hiển thị thông báo lỗi
        $error = "Tên đăng nhập hoặc mật khẩu không chính xác.";
    }
}

// Hiển thị giao diện đăng nhập
include_once 'loginView.php';
?>
