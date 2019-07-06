<?php
    require 'config.php';

    $category_id = 1;
    if(isset($_GET['category_id']))
        $category_id = $_GET['category_id'];


    $query = "select * from category
              WHERE category_id = $category_id";

    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];



//lấy tát cả danh mục
    $query = "select * from category
              order by category_id";
    $categories = $db->query($query);



// lấy tất cả sản phẩm thuộc từng loại
    $query = "select * from product 
               WHERE category_id = $category_id";
    $products = $db->query($query);
?>
<html>
<head></head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css.css">
<body>
<div id ="page">
    <div id="main">

        <div id="sidebar">
            <h2>danh sach thể loại</h2>
            <table border="1px"width="100%">
                <tr>
                    <th>id</th>
                    <th>Tên</th>
                </tr>
                <?php foreach ($categories as $category): ?>
                    <tr>
                        <td> <?php echo $category['category_id'];?></td>
                        <td>
                        <a href="?category_id=<?php echo $category['category_id'];?>">
                            <?php echo $category['categoryName'];?>
                        </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div id="content">
            <h2><?php echo "sản phẩm ".$category_name; ?></h2>
            <table border="1px" width="100%">
                <tr>
                    <th>id</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Quản lý</th>
                </tr>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td> <?php echo $product['product_id']; ?></td>
                    <td> <?php echo $product['productName']; ?></td>
                    <td> <?php echo $product['price']; ?></td>
                    <td> <?php echo $product['description']; ?></td>
                    <td>
<!--                        <form action="delete.php" method="get">-->
<!--                            <input type="hidden" name="product_id" value="--><?php //echo $product['product_id']; ?><!--">-->
<!--                            <input type="hidden" name="category_id"value="--><?php //echo $product['category_id']; ?><!--">-->
<!--                            <input type="submit" name="delete" value="Xóa">-->
<!--                        </form>-->
                        <a href="delete.php?id=<?php echo $product['product_id'];?>">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <p><h2><a href="addproduct.php">addproduct</a></h2></p>
        </div>
    </div>
</div>
</body>
</html>
