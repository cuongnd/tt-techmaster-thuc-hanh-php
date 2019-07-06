<html>
    <title></title>
    <body>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <input type="text" name="searchfrom" placeholder="datefrom">
                <input type="text" name="searchto" placeholder="todate">
                <input type="submit" value="tim">

            </div>
        </form>
        <table width="300px"border="1px" style="margin: auto;text-align: center">
            <tr>
                <th>Stt</th>
                <th>Ten</th>
                <th>Ngay sinh</th>
                <th>Dia chi</th>
                <th>anh</th>
            </tr>
            <?php
                function searchvalue($fromdate,$todate,$mang){
                    $mangketqua = array();
                    foreach ($mang as $key => $values) {
                        $datevalues = $values['ngaysinh'];
                        if ($datevalues >= $fromdate && $datevalues <= $todate) {
                            array_push($mangketqua, $key); }
                    }
            return $mangketqua;
            }
            $danhsach=array(
                "1"=>array("ten"=>"nguyen van hung","ngaysinh"=>"1983-05-12","diachi"=>"ha noi","anh"=>"<img src='img/anh.jpg' width='30px' height='40px'>"),
                "2"=>array("ten"=>"tran thi anh","ngaysinh"=>"1983-05-02","diachi"=>"ha tinh","anh"=>"<img src='img/anh.jpg' width='30px' height='40px'>"),
                "3"=>array("ten"=>"pham van han","ngaysinh"=>"1983-12-12","diachi"=>"hai phong","anh"=>"<img src='img/anh.jpg' width='30px' height='40px'>"),
                "4"=>array("ten"=>"nguyen thi tam","ngaysinh"=>"1983-05-30","diachi"=>"da nang","anh"=>"<img src='img/anh.jpg' width='30px' height='40px'>")
            );

            if ($_SERVER["REQUEST_METHOD"]=="POST"){
                $fromdate=$_POST['searchfrom'];
                $todate=$_POST['searchto'];

                $mangketqua=searchvalue($fromdate,$todate,$danhsach);
                if ($mangketqua==NULL){
                    echo "<tr>khong co khach hang hop le</tr>";
                }
                else{
                    foreach($mangketqua as $key=>$value){
                        echo "<tr>";
                        echo "<td>" . $value . "</td>";
                        echo "<td>". $danhsach[$value]["ten"] ."</td> ";
                        echo "<td>" .$danhsach[$value]["ngaysinh"]."</td>";
                        echo "<td>" .$danhsach[$value]["diachi"]."</td>";
                        echo "<td>" .$danhsach[$value]["anh"]."</td>";
                        echo "</tr>";
                    }
                }
            }
            ?>
        </table>
    </body>
</html>