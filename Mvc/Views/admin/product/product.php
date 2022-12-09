<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .Add {
            padding-bottom: 15px;
        }
    </style>
</head>
<body>
    

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="Add">
                <a href="home_admin/view_add_product" >
                        <button type="button" class="btn btn-primary">Thêm sản phẩm</button>
                </a>
            </div>
           
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Giá sản phẩm sau khi giảm</th>
                        <th>Mô tả sản phẩm</th>
                        <th>Loại sản phẩm</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    while ($row = mysqli_fetch_array($data["product_all"])){ ?>
                             <tr>
                                <td><?php echo $i;  ?></td>
                                <td><?php echo $row['name']?></td>
                                <td><img width="30" height="40" src="./public/assets/img/product/<?php echo$row['image']?>" alt="hinh anh"></td>
                                <td><?php echo $row['price']?></td>
                                <td><?php echo $row['price_discount']?></td>
                                <td><?php echo $row['description']?></td>
                                <td><?php echo $row['category_id'] ?></td>
                                <td><a href="Home_admin/delete/ <?php echo $row['id']  ?>" class="btn btn-primary">Delete</a></td>
                                <td><a href="Home_admin/view_edit_product/ <?php echo $row['id']  ?>" class="btn btn-primary">Edit</a></td>                               
                            </tr>
                      <?php 
                      $i++;}
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</body>
</html>