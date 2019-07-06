<html>
<meta charset="UTF-8">
<?php
    $dsn ='mysql:host=localhost;dbname=mydatabase';
    $username = "root";
    $password = "";
    try{
        $db = new PDO($dsn,$username,$password);
    }catch (PDOException $e){
        $error_massage = $e->getMessage();
        echo "lỗi kết nối CSDL: ".$error_massage;
        exit();
    }
?>
</html>
