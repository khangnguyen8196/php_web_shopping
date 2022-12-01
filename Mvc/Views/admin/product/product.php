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
                        <span><a href="/product/delete/<?php echo $row['id'] ?>">Xoá</a></span>
                        <span><a href="product/edit/<?php echo $row['id'] ?>">Sửa</a></span>
                    </td>
                </th>
            </tr>
        </tbody>
    
        
            <?php } }?> 
    </table>
            <a href="Product/view_add">
                    <button type="button" class="btn btn-primary">Thêm sản phẩm</button>
            </a>
</body>
</html>