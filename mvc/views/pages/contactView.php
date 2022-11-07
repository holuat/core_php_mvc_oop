<h2>Danh sách sản phẩm</h2>
    <?php 
        $allproducts = json_decode($data["products"]);
        foreach($allproducts as $key => $value){
        ?>
            <div class="col l-2-4 m-4 c-6">
        <a class="home-product-item" href="">
            <div class="home-product-item-img">
            </div>
            <h4 class="home-product-item-name"><?php echo 'Tên sản phẩm:' . $value->product_name . '<br/>';  ?></h4>
            <div class="home-product-item__price">
                <span class="home-product-item__price-old"></span>
                <span class="home-product-item__price-current"><?php echo 'Giá:' . $value->product_price . '<br/>';  ?></span>
            </div>
            <div class="home-product-item__action">
                <span class="home-product-item__like home-product-item__like--liked">
                    <i class="far fa-heart home-product-item-icon-like-empty"></i>
                    <i class="fas fa-heart home-product-item-icon home-product-item-icon-like-fill"></i>
                </span>
                <span class="home-product-item__sold"><?php echo 'Số lượng:' . $value->product_quantity . '<br/>';  ?></span>
            </div>
            <div class="home-product-item__origin">
                <span class="home-product-item__brand">Yohe</span>
                <span class="home-product-item__origin-name">Thái Lan</span>
            </div>
            <div class="home-product-item__favourite">
                <i class="fas fa-check"></i>
                <span>Yêu thích</span>
            </div>
            <div class="home-product-item__sale-off">
                <span class="home-product-item__sale-off-percent">10%</span>
                <span class="home-product-item__sale-off-label">GIẢM</span>
            </div>
        </a>
    </div>
    <?php }
    ?>