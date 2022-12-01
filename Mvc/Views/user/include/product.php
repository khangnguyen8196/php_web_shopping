<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
</head>
<body>              
    <table class="table">
        <tbody>           
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Ảnh sản phẩm</th>
                <th scope="col">Giá sản phẩm</th>
                <th scope="col">Giá sản phẩm sau khi giảm</th>
                <th scope="col">Mô tả sản phẩm</th>
                <th scope="col">Loại sản phẩm</th>
                <th scope="col">Action</th>
            </tr>
        </tbody> 
                   
               
        <?php 
        if(isset($data["pro"])){
              
        while ($row = mysqli_fetch_array($data["pro"])){          
        ?>      
               
        
        <tbody>
            <tr>
                <th scope="row">
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name']?></td>
                    <td><img width="30" height="40" src="./public/assets/img/product/<?php echo$row['image']?>" alt="hinh anh"></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['price_discount']?></td>
                    <td><?php echo $row['description']?></td>
                    <td><?php echo $row['category_id'] ?></td>
                    <td>
                    </td>
                </th>
            </tr>
        </tbody>
    
        
            <?php } }?> 
    </table>
</body>
</html>






<!-- <div class="home__product">
    <div class="grid__row">  
        <div class="grid__column-2-4">
            <a class="home__product-item" href="#">
                <div class="home__product-item__img" style="background-image: url(https://cf.shopee.vn/file/6b09b1d6cdfe1b22d2567721179b2bb6); background-size: contain; background-repeat: no-repeat;"></div>
                <h4 class="home__product-item__name">[Mã ELHACE giảm 4% đơn 300K] (Chính Hãng) Dây loa 1 đầu 3.5mm ra 2 AV dài 5m , 3m , 1.5m</h4>
                <div class="home__product-item__price">
                    <span class="home__product-item__price-old">120.000đ</span>
                    <span class="home__product-item__price-current">52.000đ</span>
                </div>
                <div class="home__product-item__action">
                    <span class="home__product-item__like home__product-item__like--liked">
                        <i class="home__product-item__like-icon-empty far fa-heart"></i>
                        <i class="home__product-item__like-icon-fill fas fa-heart"></i>
                    </span>
                    <div class="home__product-item__rating">
                        <i class="home__product-item__star-gold fas fa-star"></i>
                        <i class="home__product-item__star-gold fas fa-star"></i>
                        <i class="home__product-item__star-gold fas fa-star"></i>
                        <i class="home__product-item__star-gold fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="home__product-item__sold">82 Đã bán</span>

                </div>
                <div class="home__product-item__origin">
                    <span class="home__product-item__brand">Whoo</span>
                    <span class="home__product-item__origin-name">Hàn Quốc</span>
                </div>
                <div class="home__product-item__favourite">
                    <i class="fas fa-check"></i>
                    <span>Yêu thích</span>    
                </div>
                <div class="home__product-item__sale-off">
                    <span class="home__product-item__sale-off-percent">52%</span>
                    <span class="home__product-item__sale-off-label">GIẢM</span>
                </div>
            </a>
        </div>      
    </div>
</div>  -->