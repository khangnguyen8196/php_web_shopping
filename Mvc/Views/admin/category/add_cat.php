
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Thêm danh mục</title>
</head>
<body>

<form action="/Home_admin/add_cat" method="post"  class="col-lg-4">
    <label>Tên danh mục</label>
    <br/>
    <input class="form-control" type="text" name="name">
    <br/>
    <input type="submit" name="btn_cat" value="ADD">
</form>
<?php
    if(isset($data["result"])){ 
    
        if($data["result"]==true){?>
            <h3 class="alert alert-success"> 
            <?php echo "Thêm thành công"; ?>
            </h3>
            <?php    
        }
        else{ ?>
            <h3 class="alert alert-warning"> 
            <?php echo "Thêm thất bại"; ?>
            </h3> 
<?php }            
        }?>
</body>
</html>