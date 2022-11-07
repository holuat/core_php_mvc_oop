
    <h2>Danh sách sản phẩm</h2>

    <?php
    while($row = mysqli_fetch_array($data['getProduct'])){
        echo $row["product_name"];
        echo $row["product_price"];
        echo $row["product_quantity"];
    ?></br>
    <?php 
    }
    ?>