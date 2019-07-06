<html>
    <title></title>
    <meta charset="UTF-8">
    <style>
        form{
            width: 300px;
            min-height: 100px;
            border: 1px solid black;
            margin: auto;
        }
        p{
            text-align: center;
        }
        #submit{
            text-align: center;
        }
        label{

            text-align: right;
            display: inline-block;
            width: 100px;
            padding: 10px;

        }


    </style>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <p>LOGIN</p>
            <div id="hang">
                <label>Tên đăng nhập</label>
                <input type="text" name="usename" size="20" placeholder="usename">
            </div>
            <div id="hang">
                <label>Mật khẩu</label>
                <input type="password" name="password" size="20" placeholder="password">
            </div>
            <div id="submit">
                <input type="submit" name="submit" value="Đăng nhập">
            </div>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"]=="POST" ){
                $usename=$_POST["usename"];
                $password=$_POST["password"];
                if (($usename=="admin")&&($password=="admin")){
                    echo ("<h2>Hello"." ".$usename." "."to page</h2>");
                }
                else{
                    echo("<h2>Login khong hop le</h2>");
                }
            }
        ?>
    </body>
</html>