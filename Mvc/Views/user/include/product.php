           
    <!-- <table class="table">
        <tbody>           
            <tr>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Ảnh sản phẩm</th>
                <th scope="col">Giá sản phẩm</th>
                <th scope="col">Giá sản phẩm sau khi giảm</th>
                <th scope="col">Mô tả sản phẩm</th>
                <th scope="col">Loại sản phẩm</th>
                <th scope="col">Action</th>
            </tr>
        </tbody> 
    </table> -->
    <div class="home__product">
        <div class="grid__row">  
        <?php 
        if(isset($data["product"])){
              
        while ($row = mysqli_fetch_array($data["product"])){          
        ?>      
          
                    <div class="grid__column-2-4">
                        <a class="home__product-item" href="/Product/detail/<?php echo $row['id']  ?>">
                            <div class="home__product-item__img" style='background-image: url("/public/assets/img/product/<?php echo $row['image']; ?>");background-size: contain;background-repeat: no-repeat;'
                            alt="hinh anh"></div>
                            <h4 class="home__product-item__name"><?php echo $row['name']?></h4>
                            <div class="home__product-item__price">
                                <span class="home__product-item__price-old"><?php echo $row['price']?></span>
                                <span class="home__product-item__price-current"><?php echo $row['price_discount']?></span>
                            </div>
                            <!-- <div class="home__product-item__action"> -->
                                <!-- <span class="home__product-item__like home__product-item__like--liked">
                                    <i class="home__product-item__like-icon-empty far fa-heart"></i>
                                    <i class="home__product-item__like-icon-fill fas fa-heart"></i>
                                </span> -->
                                <!-- <div class="home__product-item__rating">
                                    <i class="home__product-item__star-gold fas fa-star"></i>
                                    <i class="home__product-item__star-gold fas fa-star"></i>
                                    <i class="home__product-item__star-gold fas fa-star"></i>
                                    <i class="home__product-item__star-gold fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div> -->
                                <!-- <span class="home__product-item__sold">82 Đã bán</span> -->

                            <!-- </div> -->
                            <!-- <div class="home__product-item__origin">
                                <span class="home__product-item__brand">Whoo</span>
                                <span class="home__product-item__origin-name">Hàn Quốc</span>
                            </div> -->
                            <!-- <div class="home__product-item__favourite">
                                <i class="fas fa-check"></i>
                                <span>Yêu thích</span>    
                            </div>
                            <div class="home__product-item__sale-off">
                                <span class="home__product-item__sale-off-percent">52%</span>
                                <span class="home__product-item__sale-off-label">GIẢM</span>
                            </div> -->
                        </a>
                    </div>      
                  
        
    
    
        
            <?php } }?> 
        </div>
    </div> 

    <!-- pagination -->
    <ul class="pagination home__product__pagination">
    <?php
         $product_all=$this->ProductModel->get_all_product();
         $item_page = !empty($_GET['per_page'])? $_GET['per_page']:5;
         $current_page=!empty($_GET['page'])?$_GET['page']:1;
         $product_count= mysqli_num_rows( $product_all);
         $product_button=ceil($product_count/ $item_page);
         for($i=1;$i<=$product_button; $i++){?>
            <?php if($i !=$current_page){?> 
                <?php if($i > $current_page - 3 && $i < $current_page +3 ){?>
                            <?php echo '<a class="pagination-item__link" href="?per_page='.$item_page.'&page='.$i.'">'.$i.'</a>'; ?>
                <?php }?>   
        <?php } else {?>
                    <?php echo '<strong >'.$i.'</strong>' ?>

                <?php } ?>
           <?php } ?>
    </ul>
    




