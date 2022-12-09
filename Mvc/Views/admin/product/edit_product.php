<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Thêm sản phẩm</title>
</head>
<body>
      <?php 
      while ( $row= mysqli_fetch_array($data["edit"])) {?>
          <form action="/Home_admin/update_product/<?php echo $row["id"] ?>"  method="post" enctype="multipart/form-data"  class="col-lg-4">
            <label>Tên sản phẩm</label>
            <br/>
            <input class="form-control" type="text" name="name" value="<?php echo $row['name']?>">
            <br/>
            <label>Ảnh sản phẩm</label>
            <br/>
            <input class="" type="file" name="image" value="Chọn ảnh">
            <span><img width = "50" height="50" src="../../../../public/assets/img/product/<?php echo$row['image']?>"></span>
            <br/>
            <label>Giá sản phẩm</label>
            <br/>
            <input class="form-control" type="text" name="price" value="<?php echo $row['price']?>">
            <br/>
            <label>Giá sản phẩm sau khi giảm</label>
            <br/>
            <input  class="form-control"type="text" name="price_discount" value="<?php echo $row['price_discount']?>">
            <br/>
            <label>Mô tả sản phẩm</label>
            <br/>
            <input class="form-control" type="text" name="description" value="<?php echo $row['description']?>">
            <br/>
            <label>Danh mục sản phẩm</label>
            <br/>
            <select class="form-control" name="category_id" value="<?php echo $row['category_id']?>">
            <?php
              while($category=mysqli_fetch_array($data["categories"])){?>
                  <option value="<?php echo $category["id"] ?>">
                      <?php echo $category["name"] ?>
                  </option>
            <?php }
            ?>    
            </select>
            <br/>
            <input type="submit" name="btn_update" value="Edit">
        </form>
     <?php }
      ?>

<?php
    if(isset($data["result"])){ 
    
        if($data["result"]==true){?>
            <h3 class="alert alert-success"> 
            <?php echo "Sửa thành công"; ?>
            </h3>
          <?php    
        }
        else{ ?>
            <h3 class="alert alert-warning"> 
            <?php echo "Sửa thất bại"; ?>
            </h3> 
  <?php }            
        }?>


</body>
</html>