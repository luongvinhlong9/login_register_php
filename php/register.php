<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>
    <div class="register-container">
        <form action="register.php" method="post">
            <h2>Đăng ký tài khoản</h2>
            <div class="input-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="name">Tên:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <button type="submit" class="btn" name="register">Đăng ký</button>
            <a class="login" href="./login.php">Đã có tài khoản? Đăng nhập</a>
            <?php require './process/register.php'; ?>
        </form>
    </div>
</body>

</html>
