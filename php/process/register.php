<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST['register'])) {

    include('./manager/connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    if (!$username || !$password || !$name) {
        echo "Vui lòng nhập đầy đủ thông tin";
        exit;
    }


    // $password = md5($password);


    $query = "SELECT * FROM user WHERE username='$username'";
    $result = $connect->query($query)->fetch_assoc();
    // echo serialize($result);
    if (!empty($result)) {
        echo "Tài khoản đã tồn tại ";
    } else {
        $query = "insert into user(username, password, name) values('$username', '$password', '$name')";
        $connect->query($query);
        echo "Đăng ký thành công ";
    }
}
