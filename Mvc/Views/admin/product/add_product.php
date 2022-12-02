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


<form action="/Home_admin/Add" method="post" enctype="multipart/form-data"  class="col-lg-4">
    <label>Tên sản phẩm</label>
    <br/>
    <input class="form-control" type="text" name="name">
    <br/>
    <label>Ảnh sản phẩm</label>
    <br/>
    <input class="" type="file" name="image" value="Chọn ảnh">
    <br/>
    <label>Giá sản phẩm</label>
    <br/>
    <input class="form-control" type="text" name="price">
    <br/>
    <label>Giá sản phẩm sau khi giảm</label>
    <br/>
    <input  class="form-control"type="text" name="price_discount">
    <br/>
    <label>Mô tả sản phẩm</label>
    <br/>
    <input class="form-control" type="text" name="description">
    <br/>
    <label>Danh mục sản phẩm</label>
    <br/>
    <select class="form-control" name="category_id">
      <option name="category_id">1</option>
      <option name="category_id">2</option>
    </select>
    <br/>
    <input type="submit" name="btn" value="ADD">
</form>
</body>
</html>