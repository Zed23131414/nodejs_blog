<?php
if(isset($_POST['login'])){
    $name1 = $_POST['username'];
    $pass1 = $_POST['password'];
    $sql = "SELECT * FROM tb_user WHERE username = '$name1' AND password = '$pass1' LIMIT 1";
    $row = mysqli_query($conn , $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        header("Location:index2.php?username=$name1");
    }else {
        echo "<script>alert('user name hoặc mật khẩu sai! Vui lòng nhập lại');</script>";;
    }
}   
?>