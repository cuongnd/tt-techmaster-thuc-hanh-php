<html>
    <title></title>
    <style>
        form{
            margin-top: 10px;
        }
        #dich{
            border: 1px solid black;
            width: 300px;
            margin: auto;
            height: 200px;
            text-align: center;
            background: aliceblue;
        }
    </style>
    <body>
        <div id="dich">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <input type="text" name="keyword"placeholder="tu can tim">
                <input type="submit" name="submit" value="Tim">
            </form>
            <?php
            $flag=0;
            $method = $_SERVER["REQUEST_METHOD"];
            if ($method == "POST") {
                $keyword = $_POST["keyword"];
                $tudien = array("hello" => "xinchao", "apple" => "Qua tao", "happy" => "hanh phuc");
                    foreach ($tudien as $tienganh => $tiengviet) {
                        if ($tienganh == $keyword) {
                            echo $tienganh . "=>" . $tiengviet;
                            $flag = 1;
                        }
                    }
                    if ($flag == 0) {
                        echo "khong co trong tu dien";
                    }
            }
            ?>
        </div>
    </body>
</html>