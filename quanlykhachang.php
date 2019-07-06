<html>
    <title></title>
    <body >
        <table width="300px"border="1px" style="margin: auto;text-align: center ">
            <tr>
                <th>Stt</th>
                <th>Ten</th>
                <th>Ngay sinh</th>
                <th>Dia chi</th>
                <th>anh</th>
            </tr>

            <?php
                $danhsach=array(
                    "1"=>array("ten"=>"nguyen van hung","ngaysinh"=>"11/3","diachi"=>"ha noi","anh"=>"<img src='img/anh.jpg' width='30px' height='40px'>"),
                    "2"=>array("ten"=>"tran thi anh","ngaysinh"=>"20/4","diachi"=>"ha tinh","anh"=>"<img src='img/anh.jpg' width='30px' height='40px'>"),
                    "3"=>array("ten"=>"pham van han","ngaysinh"=>"5/3","diachi"=>"hai phong","anh"=>"<img src='img/anh.jpg' width='30px' height='40px'>"),
                    "4"=>array("ten"=>"nguyen thi tam","ngaysinh"=>"3/6","diachi"=>"da nang","anh"=>"<img src='img/anh.jpg' width='30px' height='40px'>")
                );
                foreach($danhsach as $key => $value){
                    echo "<tr>";
                    echo "<td>".$key."</td>";
                    echo "<td>".$value["ten"]."</td>";
                    echo "<td>".$value["ngaysinh"]."</td>";
                    echo "<td>".$value["diachi"]."</td>";
                    echo "<td>".$value["anh"]."</td>";
                    echo "</tr>";

                }
            ?>

        </table>

    </body>
</html>