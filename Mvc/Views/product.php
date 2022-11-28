<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <style>
        div {
            padding: 20px;
        }
        .header, .footer{
            background-color: #ddd;
        }
    </style>
</head>
<body>
        <div class="header"></div>
        <div class="content">
            <?php require_once "./Mvc/Views/pages/".$data["Page"].".php" ?>
        </div>
        
</body>
</html>