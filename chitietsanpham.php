<?php 
        include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WjpuKi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;1,300&display=swap">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/chitiet.css">
</head>
<body>
    <class class="app">
        <header class="header">
            <div class="grid wide">
                <nav class="header__navbar hide-on-mobile-tablet">
                     <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">
                            Vào cửa hàng trên web
                            
                            <!-- Header QR Code -->
                            <div class="header__qr">
                                <img src="./assets/img/qr-code.png" alt="QR Code" class="header__qr-img">
                                <div class="header__qr-apps">
                                    <a href="https://play.google.com/store/apps/details?id=com.shopee.th&hl=vi&gl=US" class="header__qr-link">
                                        <img src="./assets/img/gg-play.png" alt="GG Play" class="header__qr-download-img">
                                    </a>
                                    <a href="https://apps.apple.com/vn/app/shopee-9-9-ng%C3%A0y-si%C3%AAu-mua-s%E1%BA%AFm/id959841449" class="header__qr-link">
                                        <img src="./assets/img/app-store.png" alt="App Store" class="header__qr-download-img">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-title--no-pointer">Kết nối</span>
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fab fa-facebook"></i>
                            </a>

                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fab fa-instagram"></i>
                            </a>
                        </li>
                     </ul>
                     <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-noti">
                            <a href="" class="header__navbar-item-link ">
                                <i class="header__navbar-icon far fa-bell"></i>
                                Thông báo
                            </a>
                            <div class="header__noti">
                                <header class="header__noti-header">
                                    <h3>Thông báo mới nhận</h3>
                                </header>
                                <ul class="header__noti-list">
                                    <li class="header__noti-item header__noti-item--viewed">
                                        <a href="" class="header__noti-link">
                                            <img src="./assets/img/product/1.jfif" alt="" class="header__noti-img">
                                            <div class="header__noti-info">
                                                <span class="header__noti-name">Mỹ phẩm</span>
                                                <span class="header__noti-desc">Chính hãng</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="header__noti-item">
                                        <a href="" class="header__noti-link">
                                            <img src="./assets/img/product/1.jfif" alt="" class="header__noti-img">
                                            <div class="header__noti-info">
                                                <span class="header__noti-name">Mỹ phẩm</span>
                                                <span class="header__noti-desc">Chính hãng</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="header__noti-item">
                                        <a href="" class="header__noti-link">
                                            <img src="./assets/img/product/1.jfif" alt="" class="header__noti-img">
                                            <div class="header__noti-info">
                                                <span class="header__noti-name">Mỹ phẩm</span>
                                                <span class="header__noti-desc">Chính hãng</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="header__noti-item">
                                        <a href="" class="header__noti-link">
                                            <img src="./assets/img/product/1.jfif" alt="" class="header__noti-img">
                                            <div class="header__noti-info">
                                                <span class="header__noti-name">Mỹ phẩm</span>
                                                <span class="header__noti-desc">Chính hãng</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <footer class="header__noti-footer">
                                    <a href="" class="header__noti-footer-btn">Xem tất cả</a>
                                </footer>

                            </div>

                        </li>
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon far fa-question-circle"></i>
                                Trợ giúp
                            </a>
                        </li>
                        <!-- <li class="header__navbar-item header__navbar-item--bold header__navbar-item--separate">Đăng ký</li>
                        <li class="header__navbar-item header__navbar-item--bold">Đăng nhập</li> -->

                        <li class="header__navbar-item header__navbar-user">
                            <img src="https://cf.shopee.vn/file/8e289302619dfd2b67f9795e097c420f_tn" alt="" class="header__navbar-user-img">
                            <span class="header__navbar-user-name">T.Nghia</span>

                            <ul class="header__navbar-user-menu">
                                <li class="header__navbar-user-item">
                                    <a href="">Tài khoản của tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="">Địa chỉ của tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="">Đơn mua</a>
                                </li>
                                <li class="header__navbar-user-item header__navbar-user-item--separate">
                                    <a href="">Đăng xuất</a>
                                </li>
                            </ul>
                        </li>

                     </ul>
                </nav>

                <div class="header-with-search">
                    <div>
                        <div class="header__mobile-menu header__mobile-menu--has-menu hide-on-pc">
                            <!-- <input type="button" hidden id="header__mobile-menu-check" class="header__mobile-menu-checkbox"> -->
                            <p class="ti-menu header__mobile-menu-icon"></p>
                            <ul class="header__mobile-menu-list">
                                <li class="header__mobile-menu-item">
                                    <i class="fas fa-user-circle header__mobile-menu__icon-size"></i>
                                    Account
                                </li>
                                <li class="header__mobile-menu-item">
                                    <i class="fas fa-sign-in-alt header__mobile-menu__icon-size"></i>    
                                    Đăng nhập
                                </li>
                                <li class="header__mobile-menu-item">
                                    <i class="fas fa-plus header__mobile-menu__icon-size"></i>
                                    Đăng ký
                                </li>
                                <li class="header__mobile-menu-item">
                                    <i class="fas fa-sign-out-alt header__mobile-menu__icon-size"></i>
                                    Đăng xuất
                                </li>
                            </ul>
                        </div>
    
                        <label for="mobile-search-checkbox" class="header__mobile-search hide-on-pc hide-on-tablet">
                            <i class="header__mobile-search-icon fas fa-search"></i>
                        </label>
                    </div>

                    <div class="header__logo">
                        <a href="/" class="header__logo-link">
                            <!-- <img src="https://api.freelogodesign.org/files/112bfa0b94514f7494492bb674139dbf/thumb/logo_200x200.png?v=0" class="header__logo-img" alt=""> -->
                            <img src="WJPUKI.svg" class="header__logo-img" alt="">
                        </a>
                    </div>

                    <!-- Search  -->
                    <input type="checkbox" hidden id="mobile-search-checkbox" class="header__search-checkbox">

                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Tìm kiếm trong Shop">
 
                            <!-- Search history -->
                            <div class="header__search-history">
                                <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="">Kem dưỡng da</a>
                                    </li>

                                    <li class="header__search-history-item">
                                        <a href="">Kem trị mụn</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header__search-select">
                            <span class="header__search-select-label">Trong shop</span>
                            <i class="header__search-select-icon fas fa-chevron-down"></i>

                            <ul class="header__search-option">
                                <li class="header__search-option-item header__search-option-item--active">
                                    <span>Trong shop</span>
                                    <i class="fas fa-check"></i>
                                </li>

                                <li class="header__search-option-item">
                                    <span>Ngoài shop</span>
                                    <i class="fas fa-check"></i>
                                </li>
                            </ul>
                        </div>
                        <button class="header__search-btn">
                            <i class="header__search-btn-icon fas fa-search"></i>
                        </button>
                    </div>

                    <!-- Cart -->
                    <div class="header__cart">
                        <div class="header__cart-wrap">
                            <i class="header__cart-icon fas fa-shopping-cart"></i>
                            <span class="header__cart-notice">3</span>

                            <!-- No cart : header__cart-list--no-cart -->
                            <div class="header__cart-list ">
                                <img src="./assets/img/pngtree-add-shopping-cart-icon-png-image_4436011.jpg" class="header__cart--no-cart-img" alt="">
                                <span class="header__cart-list-msg">
                                    Chưa có sản phẩm
                                </span>

                                <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                                <ul class="header__cart-list-item">
                                    <!-- cart item, -->
                                    <li class="header__cart-item">
                                        <img src="./assets/img/product/2.jfif" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Bộ sản phẩm skincare</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">2.000.000đ</span>
                                                    <span class="header__cart-item-mutiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>
                                            </div>

                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-desc">
                                                    Phân loại: Bạc
                                                </span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="header__cart-item">
                                        <img src="./assets/img/product/3.jfif" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Bộ sản phẩm skincare</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">2.000.000đ</span>
                                                    <span class="header__cart-item-mutiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>
                                            </div>

                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-desc">
                                                    Phân loại: Bạc
                                                </span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="header__cart-item">
                                        <img src="./assets/img/product/4.jfif" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Bộ sản phẩm skincare</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">2.000.000đ</span>
                                                    <span class="header__cart-item-mutiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>
                                            </div>

                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-desc">
                                                    Phân loại: Bạc
                                                </span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="./assets/img/product/4.jfif" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Bộ sản phẩm skincare</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">2.000.000đ</span>
                                                    <span class="header__cart-item-mutiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>
                                            </div>

                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-desc">
                                                    Phân loại: Bạc
                                                </span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="./assets/img/product/4.jfif" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Bộ sản phẩm skincare</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">2.000.000đ</span>
                                                    <span class="header__cart-item-mutiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>
                                            </div>

                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-desc">
                                                    Phân loại: Bạc
                                                </span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#" class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <ul class="header__sort-bar">
                <li class="header__sort-item">
                    <a href="" class="header__sort-link">Liên quan</a> 
                </li>
                <li class="header__sort-item">
                    <a href="" class="header__sort-link">Mới nhất</a>
                </li>
                <li class="header__sort-item">
                    <div class="header__sort-item--active">
                        <a href="" class="header__sort-link">Bán chạy</a>
                    </div>
                </li>
                <li class="header__sort-item">
                    <a href="" class="header__sort-link">Giá</a>
                    
                </li>            
            </ul>
        </header>
        <?php 
        $sql = "select * from chitietsp where id='$_GET[id]' limit 1";
        $result = $conn->query($sql);
        // print_r($result);
        while($row =$result -> fetch_assoc()){
            echo"  
        <div class='app__container'>
            <div class='grid wide'>
                <div class='row'>
                    <div class='main__product'>
                        <div class='col l-4 main__product-item'>
                            <img class='main__product-img' src='./assets/img/product/RitaLmao.jpg' alt=''>
                        </div>
                        <div class='col l-8 main__product-info'>
                            <h1 class='main__product-name'>
                                [Mihoyo] Mô hình nhân vật Honkai Impact 3rd Rita Rossweisse
                            </h1>
                            <div class='main__product-info'>
                                <div class='info-status'>
                                    <i class='fas fa-tags info-tag'></i>
                                    <div class='info-name'>Tình trạng: </div>
                                    <span class='info-name-1'>Còn hàng</span>
                                </div>
                                <div class='info-type'>
                                    <i class='fab fa-magento info-tag'></i>
                                    <div class='info-name'>Loại sản phẩm: </div>
                                    <span class='info-name-1'>Figure</span>
                                </div>
                                <div class='info-id'>
                                    <i class='fas fa-fingerprint info-tag'></i>
                                    <div class='info-name'>Mã sản phẩm: </div>
                                    <span class='info-name-1'>1</span>
                                </div>
                            </div>
                            <div class='main__product-price'>
                                <div class='old-price'>
                                    Giá cũ: 3.999.000đ
                                </div>
                                <div class='discount-price'>
                                    Giảm giá: 600.000đ
                                </div>
                                <div class='current-price'>
                                    Giá: 3.399.000đ
                                </div>
                            </div>
                            <div class='main__product-order'>
                                <div class='order-quantity'>
                                    <button class='quantity__minus'>-</button>
                                    <input type='number' class='quantity__number'>
                                    <button class='quantity__plus'>+</button>
                                </div>
                                <div class='order-status'>Còn trong kho: n</div>
                                <div class='order-btn'>
                                    <div class='btn btn--primary'>THÊM VÀO GIỎ</div>
                                    <div class='btn btn--primary'>MUA NGAY</div>
                                </div>
                                
                            </div>
                        </div>
                        ?>
                    </div>
                </div>
                <div class='row'>
                    <div class='product__desc'>
                        <div class='product__desc-header'>
                            <i class='fas fa-bars'></i>
                            <span>Thông tin sản phẩm</span>
                        </div>
                        <ul class='product-desc__list'>
                            <li>Mô hình Rita Phiên bản Maid</li> 
                            <li>Loại: mô hình tĩnh</li> 
                            <li>Chiều cao: ~30cm</li> 
                            <li>Tình trạng: Hàng mới </li> 
                            <li>Thương hiệu : Chính hãng Mihoyo</li> 
                        </ul>
                    </div>
                </div>
                <div class='row'>
                    <div class='product__comment'>
                        <div class='product__comment-header'>
                            <i class='fas fa-bars'></i>
                            <span>Đánh giá sản phẩm</span>
                        </div>
                        <ul class='product-comment__list'>
                            
                        </ul>
                    </div>
                </div>
            </div>
            

        </div>

        <footer class='footer'>
            <div class='grid wide footer__content'>
                <div class='row'>
                    <div class='col l-2-4 m-4 c-6 footer__row-space'>
                        <h3 class='footer__heading'>Chăm sóc khách hàng</h3>
                        <ul class='footer__list'>
                            <li class='footer-item'>
                                <a href='' class='footer-item__link'>Trung tâm trợ giúp</a>
                            </li>
                            <li class='footer-item'></li>
                                <a href='' class='footer-item__link'>Shop Mail</a>
                            </li>
                            <li class='footer-item'></li>
                                <a href='' class='footer-item__link'>Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class='col l-2-4 m-4 c-6 footer__row-space'>
                        <h3 class='footer__heading'>Giới thiệu</h3>
                        <ul class='footer__list'>
                            <li class='footer-item'>
                                <a href='' class='footer-item__link'>Giới thiệu</a>
                            </li>
                            <li class='footer-item'></li>
                                <a href='' class='footer-item__link'>Tuyển dụng</a>
                            </li>
                            <li class='footer-item'></li>
                                <a href='' class='footer-item__link'>Điều khoản</a>
                            </li>
                        </ul>
                    </div>
                    <div class='col l-2-4 m-4 c-6 footer__row-space'>
                        <h3 class='footer__heading'>Danh mục</h3>
                        <ul class='footer__list'>
                            <li class='footer-item'>
                                <a href='' class='footer-item__link'>Sản phẩm mới</a>
                            </li>
                            <li class='footer-item'></li>
                                <a href='' class='footer-item__link'>Sản phẩm được ưa chuộng</a>
                            </li>
                            <li class='footer-item'></li>
                                <a href='' class='footer-item__link'>Sản phẩm nhập khẩu</a>
                            </li>
                        </ul>
                    </div>
                    <div class='col l-2-4 m-4 c-6 footer__row-space'>
                        <h3 class='footer__heading'>Theo dõi</h3>
                        <ul class='footer__list'>
                            <li class='footer-item'>
                                <a href='' class='footer-item__link'>
                                    <i class='footer-item__icon fab fa-facebook'></i>
                                    Facebook
                                </a>
                            </li>
                            <li class='footer-item'></li>
                                <a href='' class='footer-item__link'>
                                    <i class='footer-item__icon fab fa-instagram-square'></i>
                                    Instagram
                                </a>
                            </li>
                            <li class='footer-item'></li>
                                <a href='' class='footer-item__link'>
                                    <i class='footer-item__icon fab fa-linkedin-in'></i>
                                    Linkin
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class='col l-2-4 m-8u c-12 footer__row-space'>
                        <h3 class='footer__heading'>Vào cửa hàng trên ứng dụng</h3>
                        <div class='footer__download'>
                            <img src='/assets/img/qr-code.png' alt='Download QR' class='footer__download-qr'>
                            <div class='footer__download-apps'>
                                <a href='' class='footer__download-app-link'>
                                    <img src='/assets/img/gg-play.png' alt='Google Play' class='footer__download-app-img'>
                                </a>
                                <a href='' class='footer__download-app-link'>
                                    <img src='/assets/img/app-store.png' alt='App Store' class='footer__download-app-img'>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>";}
            ?>
            <div class="footer__bottom">
                <div class="grid wide">
                   <p class="footer__text"> © 2021 - Bản quyền thuộc về Công ty TNHH MTV KyoNo1</p>
                </div>
            </div>
        </footer>
        
    </div>

    <!-- Modal lauout -->
     <!-- <div class="modal">
        <div class="modal__overlay">

        </div> -->

        <!-- <div class="modal__body"> -->
            <!-- Register form -->
            <!--<div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <span class="auth-form__switch-btn">Đăng nhập</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Email">
                        </div>

                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Mật khẩu">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>

                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">
                            Bằng việc ấn đăng ký, bạn đã đồng ý với Shopee về 
                            <a href="" class="auth-form__text-link">Điều khoản dịch vụ </a> & 
                            <a href="" class="auth-form__text-link">Chính sách bảo mật. </a>

                        </p>
                    </div>

                    <div class="auth-form__control">
                        <button class="btn btn--normal auth-form__control-back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>

                </div>
                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--fb btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Facebook
                        </span>
                    </a>

                    <a href="" class="auth-form__socials--gg btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon ti-google"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Google
                        </span>
                    </a>
                </div>

            </div> -->

            <!-- Login form -->
            <!-- <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <span class="auth-form__switch-btn">Đăng ký</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Email">
                        </div>

                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Mật khẩu">
                        </div>
                    </div>

                    <div class="auth-form__aside">
                       <div class="auth-form__help">
                           <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                           <span class="auth-form__help-separate"></span>
                           <a href="" class="auth-form__help-link">Cần trợ giúp</a>
                       </div>
                    </div>

                    <div class="auth-form__control">
                        <button class="btn btn--normal auth-form__control-back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>

                </div>
                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--fb btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Facebook
                        </span>
                    </a>

                    <a href="" class="auth-form__socials--gg btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon ti-google"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Google
                        </span>
                    </a>
                </div>

            </div>

        </div>
    </div> -->

</body>
</html>