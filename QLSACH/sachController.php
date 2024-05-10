<?php
session_start();

// Kiểm tra nếu người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Lấy danh sách sách từ model
include_once 'SachModel.php';
$sachModel = new SachModel();
$books = $sachModel->getAllBooks();

// Hiển thị giao diện sách
include_once 'sachView.php';
?>
