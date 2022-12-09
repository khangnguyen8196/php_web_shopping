<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/Home">Trang chủ</a>
            <h6 class="m-0 font-weight-bold text-primary">Giỏ hàng</h6>
        </div>
        <div class="card-body">
            
                <form id="cart-form" action="cart.php?action=submit" method="post">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <th class="product-number">STT</th>
                                <th class="product_name">Tên sản phẩm</th>
                                <th class="product_img">Ảnh sản phẩm</th>
                                <th class="product_price">Đơn giá</th>
                                <th class="product_quantity">Số lượng</th>
                                <th class="product_money">Thành tiền</th>
                                <th class="product-delete">Xoá</th>
                            </tr>
                        
                            <?php
                            $i=1;
                                while($row=mysqli_fetch_array($data['cart'])){ ?>
                                    <tr>
                                        <td class="product-number"><?php echo $i;  ?></td>
                                        <td class="product_name"><?php echo $row['name'];  ?></td>
                                        <td class="product_img"><img width="200" height="200" class="product-img" src="../../../../public/assets/img/product/<?php echo$row['image']?>" alt="hinh anh"></td>
                                        <td class="product_price"><?php echo $row['price'];  ?></td>
                                        <td class="product_quantity"><input type="text" value="<?php echo "1";  ?>" name="quantity[1]" /></td>
                                        <td class="product_money"><?php echo "20000000"  ?></td>
                                        <td class="product-delete"><a href="//delete_user/ <?php echo $row['id']  ?>" class="">Delete</a></td>
                                    </tr>
                            <?php 
                            $i++;}
                            ?>
                            <tr>
                                <td class="product-number">&nbsp</td>
                                <td class="product_name">Tổng tiền</td>
                                <td class="product_img">&nbsp</td>
                                <td class="product_price">&nbsp</td>
                                <td class="product_quantity">&nbsp</td>
                                <td class="product_money">1213123123</td>
                                <td class="product-delete">Xoá</td>
                            </tr>
                    </table>
                    <div id="form-button">
                        <input type="submit" name="update_click" value="Cập nhật" />
                    </div>
                    <hr>
                    <div>
                        <label>Người nhận:</label>
                        <input type="text" name="fullname" value=""/>
                    </div>
                    <div>
                        <label>Điện thoại:</label>
                        <input type="text" name="phone_number" value=""/>
                    </div>
                    <div>
                        <label>Địa chỉ:</label>
                        <input type="text" name="address" value=""/>
                    </div>
                    <div>
                        <label>Ghi chú:</label>
                        <textarea type="text" name="note" cols="50" rows="7"></textarea>
                    </div>
                    <input type="submit" name="order_click" value="Đặt hàng" />

                </form>
            
        </div>
    </div>

</div>
