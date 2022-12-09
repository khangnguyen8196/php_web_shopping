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

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Category</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="Add">
                <a href="home_admin/view_add_cat" >
                        <button type="button" class="btn btn-primary">Thêm danh mục</button>
                </a>
            </div>
           
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    while ($row = mysqli_fetch_array($data["categories"])){ ?>
                             <tr>
                                <td><?php echo $i;  ?></td>
                                <td><?php echo $row['name']?></td>                 
                                <td><a href="Home_admin/delete_cat/ <?php echo $row['id']  ?>" class="btn btn-primary">Delete</a></td>
                                <td><a href="Home_admin/edit_cat/ <?php echo $row['id']  ?>" class="btn btn-primary">Edit</a></td>                               
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