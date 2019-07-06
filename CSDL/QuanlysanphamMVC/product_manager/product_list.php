<?php
    include '../view/header.php';
?>
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
                        <a href="?action=delete_product&id=<?=$product['product_id'];?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p><h2><a href="?action=show_add_form">Thêm sản phẩm</a></h2></p>
    </div>
</div>
<?php
    include '../view/footer.php';
?>
