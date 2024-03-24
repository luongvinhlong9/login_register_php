<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST['login'])) {

    include('./manager/connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }


    // $password = md5($password);


    $query = "SELECT * FROM user WHERE username='$username'";
    $result = $connect->query($query)->fetch_assoc();
    // echo serialize($result);
    if (empty($result)) {
        echo "Sai tài khoản hoặc mật khẩu!";
    } else {
        if ($result['password'] == $password) {
            echo "Đăng nhập thành công ";
        } else {
            echo "Sai tài khoản hoặc mật khẩu!";
        }
    }
}
