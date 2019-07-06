<html lang="en">
<title></title>
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>
<style>
    form{
        margin: auto;
    }
</style>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <p>ĐĂNG KÝ</p>
    <div>
        <label>Tên người dùng</label>
        <input type="text" name="user" >
    </div>
    <div>
        <label>Email</label>
        <input type="email" name="email">
    </div>
    <div>
        <label>Mật khẩu</label>
        <input type="password" name="pass">
    </div>
    <div class="button">
        <button type="submit" name="submit">Đăng ký</button>
    </div>
</form>
<?php

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $flag = true;

        if (empty($user)) {
            $err="không đươc để trống tên người dùng";
            $flag = false;
        }
        if (empty($pass)) {
            $err= "không được để trống mật khẩu";
            $flag = false;
        }
        if (empty($email)) {
            $err = "không được để trống email";
            $flag = false;
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $err= "cần nhập đúng định dạng mail (xxx.@xx.xx)";
                $flag = false;
            }
        }
        if(isset($_POST['submit'])) {
            if ($flag == true) {
                echo "dang ky thanh cong";
            } else {
                echo $err;
            }
        }

    }
?>
</body>
</html>