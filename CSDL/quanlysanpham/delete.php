<?php
    require 'config.php';
    $product_id = $_GET['id'];
    $query = "SELECT * FROM product WHERE product_id =$product_id";
    $product = $db->query($query)->fetch();
    $query = "DELETE FROM product WHERE product_id =$product_id";
    $db->exec($query);
    echo "đã xóa sản phẩm".$product['productName'];

?>
<a href="index.php">quay lại</a>
