<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_register";

// Kết nối đến MySQL
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

echo "Kết nối thành công";

// Đóng kết nối
mysqli_close($conn);
?>
