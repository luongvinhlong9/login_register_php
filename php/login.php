<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="login-container">
        <form action="LOGIN.php" method="post">
            <h2>Đăng nhập</h2>
            <div class="input-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn" name="login">Đăng nhập</button>
            <a class="login" href="./register.php">Chưa có tài khoản? Đăng kí</a>
            <?php require './process/login.php'; ?>
        </form>
    </div>
</body>

</html>
