<?php
include('./views/config.php');
if (isset($_POST['register'])){
    $name = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $cppass = mysqli_real_escape_string($conn, $_POST['confirmPassword']);

    $select = "SELECT * FROM tb_user WHERE email = '$email'";
    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) > 0){
        echo "<script>alert('Email đã được sử dụng !');</script>";;
    }else {
        if ($pass != $cppass){
            echo "<script>alert('Mật khẩu không trùng khớp!');</script>";
        }else {
            $insert = "INSERT INTO tb_user(username, email, password) VALUES('$name', '$email','$pass')";
            mysqli_query($conn,$insert);
            echo "<script>alert('Đăng ký thành công');</script>";
        }
    }
}
?>