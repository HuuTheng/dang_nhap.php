<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Thành Công</title>
    <link rel="stylesheet" href="welcome.css">
</head>

<body>

    <div class="top-left-nav">
        <a href="logout.php" class="btn-nav">Đăng xuất</a>
    </div>

    <div class="welcome-container">
        <h1>Chào mừng quay trở lại!</h1>
        <div class="user-card">
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Avatar" width="100">
            <h2><?php echo htmlspecialchars($_SESSION['user']); ?></h2>
            <p>Trạng thái: <span class="status-online">Đang hoạt động</span></p>
        </div>
        <p class="quote">Bạn đã đăng nhập thành công vào hệ thống.</p>
    </div>

</body>

</html>