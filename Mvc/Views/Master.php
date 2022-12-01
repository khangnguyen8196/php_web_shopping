<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website shopping</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/base.css" /> 
    <link rel="stylesheet" href="/public/css/main.css" />
    <link rel="stylesheet" href="./public/assets/fonts/fontawesome/css/all.min.css"> 
    
</head>
<body>
    <div class="container">
        <div class="row">
        <?php require_once "./Mvc/Views/layout/header.php"?>
            <div id="leftCol" class="col-lg-3">
            <?php require_once "./Mvc/Views/layout/sidebar.php"?>
            </div>
            <div id="rightCol" class="col-lg-9">
            <?php require_once "./Mvc/Views/layout/content.php"?>
            </div>
        <?php require_once "./Mvc/Views/layout/footer.php"?> 
        </div>
       
      
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./public/js/main.js"></script>
</body>
</html>