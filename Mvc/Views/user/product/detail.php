
    <div class="main col-12">
        <a href="/">Trang chủ</a>
        <!-- Product -->
            <?php
            if (!empty($data["detail"])){
                while ($row= mysqli_fetch_array($data["detail"])) {?>
                    <div class="main__product">
                        <div class="main__product-img">
                          <img width="100%" src="../../../../public/assets/img/product/<?php echo $row['image'] ?>" alt="image">
                        </div>
                        <div class="main__product-info">
                            <h1 class="main__product-name">
                                <?php echo $row["name"]?>
                            </h1>
                            <label class="main__product-price">price:</label>
                            <div class="main__product-item__price">
                                <span class="main__product-item__price-old"><?php echo $row['price']?></span>
                                <span class="main__product-item__price-current"><?php echo $row['price_discount']?></span>
                            </div>
                            <div class="main__product-des">
                                Description
                                <p>
                                <?php echo $row['description']?>
                                </p>
                            </div>
                            <div class="main__product-quantity">
                                <div class="quantity">Quantity</div>
                                <div class="main__product-item-quantity">
                                    <div style="margin-right:15px">
                                        <div class="main__product-quantity-input">
                                            <?php
                                                if(isset($data['cart'])){
                                                    while($cart=mysqli_fetch_array($data['cart'])){?>
                                                         <form id="add-to-cart-form" action="/Product/cart_product/<?php $row['id']?>" method="post">
                                                            <input type="text" name="quantity" value="1"> <br /><br />
                                                            <input type="submit" name="btn_add" value="Add-cart" /> 
                                                        </form>
                                                <?php }}?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        
                        
                        <?php }}?>
        </div>   
    </div>
