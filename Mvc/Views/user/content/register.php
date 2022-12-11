<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F8-Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../../../../public/css/base.css" /> 
    <link rel="stylesheet" href="../../../../public/css/main.css" />
    <link rel="stylesheet" href="./public/assets/fonts/fontawesome/css/all.min.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
<!-- Modal layout-->
   <div class="modal">
        <div class="modal__overlay"></div>

            <div class="modal__body"> 
                    
                <!-- Register form -->
                <form action="/Register/register" method="post" enctype="multipart/form-data" class="auth-form">
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng ký</h3>
                            <a href="/login" style="text-decoration: none"><span class="auth-form__switch-btn">Đăng nhập</span></a>
                        </div>
                        <?php
                            if(isset($data["max"])){ 
                            
                                if($data["max"]==true){?>
                                    <h3 class="alert alert-success justify-content-center"> 
                                    <?php echo "người dùng đã tồn tại"; ?>
                                    </h3>
                                <?php    
                                }
                                else{ ?>
                                    <h3 class="alert alert-warning justify-content-center"> 
                                    <?php echo "người dùng đã tồn tại"; ?>
                                    </h3> 
                        <?php }            
                                }?>

                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="text" name="username" class="auth-form__input" placeholder="Nhập tên đăng nhập">
                            </div>
                            <div class="auth-form__group">
                                <input type="text" name="email" class="auth-form__input" placeholder="Email của bạn">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" name="pass1" class="auth-form__input" placeholder="Mật khẩu của bạn">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" name="pass2" class="auth-form__input" placeholder="Nhập lại mật khẩu">
                            </div>
                            <div class="auth-form__group">
                                <input type="text" name="fullname" class="auth-form__input" placeholder="Nhập họ và tên">
                            </div>
                            <div class="auth-form__group">
                                <input type="text" name="address" class="auth-form__input" placeholder="Địa chỉ liên hệ">
                            </div>
                        </div>
                        <div class="auth-form__aside">
                            <p class="auth-form__policy-text">
                                Bằng việc đăng ký, bạn đã đồng ý với F8-Shope về
                                <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                                <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                            </p>
                        </div>

                        <div class="auth-form__controls">
                            <a href="/" class="btn btn--normal auth-form__controls-back ">TRỞ LẠI</a>
                            <button type="submit" name="submit" class="btn btn--primary">ĐĂNG KÝ</button>
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
                    <?php
                if(isset($data["result"])){ 
                
                    if($data["result"]==true){?>
                        <h3 class="alert alert-success justify-content-center"> 
                        <?php echo "Đăng ký thành công"; ?>
                        </h3>
                     <?php    
                    }
                    else{ ?>
                        <h3 class="alert alert-warning justify-content-center"> 
                        <?php echo "Đăng ký thất bại"; ?>
                        </h3> 
            <?php }            
                    }?>
                </form>      

        </div>
   </div> 