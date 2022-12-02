<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="/public/css/base.css" /> 
    <link rel="stylesheet" href="/public/css/main.css" />
    <link rel="stylesheet" href="./public/assets/fonts/fontawesome/css/all.min.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
<style>
    .alert-warning {
        color:red;
        text-align: center;
        font-size: 18px;
        padding-bottom: 10px;
        margin: 0;
    }
    .alert-success {
        color:green;
        text-align: center;
        font-size: 18px;
        padding-bottom: 10px;
    }
</style>
</head>
<body>
<!-- Modal layout-->
    <div class="modal">
        <div class="modal__overlay"></div>

        <div class="modal__body"> 
            <!-- Login form -->
            <form class="auth-form"action="/Home_admin/Login" method="post" enctype="multipart/form-data">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <a href="/Home_admin/view_add_user" style="text-decoration: none"><span class="auth-form__switch-btn">Đăng ký</span></a>
                    </div>
                    <?php
                if(isset($data["result"])){ 
                
                    if($data["result"]==true){?>
                        <h3 class="alert alert-success "> 
                        <?php echo "Đăng nhập thành công"; ?>
                        </h3>
                     <?php    
                    }
                    else{ ?>
                        <h3 class="alert alert-warning "> 
                        <?php echo "Đăng nhập thất bại"; ?>
                        </h3> 
            <?php }            
                    }?>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" name="email" class="auth-form__input" placeholder="Email của bạn">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" name="password" class="auth-form__input" placeholder="Mật khẩu của bạn">
                        </div>
                    </div>
                    <div class="auth-form__aside">
                        <div class="auth-form__help">
                            <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                            <span class="auth-form__help-separate"></span>
                            <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                        </div>
                    </div>

                    <div class="auth-form__controls">
                        <button class="btn btn--normal auth-form__controls-back ">TRỞ LẠI</button>
                        <button tyle="submit" name="submit" class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Facebook
                        </span>
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Google
                        </span>
                    </a>
                </div>
               
            </form>
        </div>
   </div>