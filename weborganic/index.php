<?php 
    $title = 'Trang chủ';
    $baseUrl = '';
    require_once('./layouts/header.php');
    require_once('./database/config.php');
    require_once('./database/dbhelper.php');
    if(isset($_GET['partnerCode'])) {
        $partnerCode = getGet('partnerCode');
        $orderId = getGet('orderId');
        $amount = getGet('amount');
        $orderInfo = getGet('orderInfo');
        $orderType = getGet('orderType');
        $transId = getGet('transId');
        $payType = getGet('payType');

        $sql ="INSERT INTO momo(partner_code,order_id,amount,order_info,order_type,trans_id,pay_type) VALUES
        ('$partnerCode','$orderId','$amount','$orderInfo','$orderType','$transId','$payType') ";
        execute($sql);
    }
?>
<style>
    .danhmuc-trangchu {
        color: #91ad41;
    }
</style>
<link rel="stylesheet" href="./assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="./assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
<link rel="stylesheet" href="./assets/css/home.css">

<div class="home">
    <div class="slider">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
        <div class="owl-carousel owl-one owl-theme slider-wrapper">
            <div class="item-1">
                <img src="./assets/img/slider_1.jpg" alt="">
                <h3 class="text-slider1">Oars Organic</h3>
            </div>
            <div class="item-2">
                <img src="./assets/img/slider_2.jpg" alt="">
                <h3 class="text-slider2">Oars Organic</h3>
            </div>
        </div>
    </div>
    <div class="collection">
        <div class="row">
            <div class="col l-3 c-12 collect-item nth-1">
                <div class="content">
                    <h3 class="banner-title">Rau quả tươi</h3>
                    <span>
						Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các chị
					</span>
                    <button class="btn-collection">Xem ngay</button>
                </div>
            </div>
            <div class="col l-3 c-12 collect-item nth-2">
                <div class="content">
                    <h3 class="banner-title">Sinh tố hoa quả</h3>
                    <span>
						Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các chị
					</span>
                    <button class="btn-collection">Xem ngay</button>
                </div>
            </div>
            <div class="col l-3 c-12 collect-item nth-3">
                <div class="content">
                    <h3 class="banner-title">Thực phẩm tươi</h3>
                    <span>
						Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các chị
					</span>
                    <button class="btn-collection">Xem ngay</button>
                </div>
            </div>
            <div class="col l-3 c-12 collect-item nth-4">
                <div class="content">
                    <h3 class="banner-title">Hoa quả tươi mát</h3>
                    <span>
						Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các chị
					</span>
                    <button class="btn-collection">Xem ngay</button>
                </div>
            </div>
        </div>
    </div>
    <div class="about-us">
        <div class="grid wide">
            <div class="about-title ">
                <div class="about-heading">
                    <span class="text_gradient">VỀ CHÚNG TÔI</span>
                </div>
                <p>Hiện tại vùng nguyên liệu của chúng tôi có thể cung cấp các thực tập tươi sạch với số lượng lớn vì đang vào vụ mùa thu hoạch nên chúng tôi có thể cung ứng cho tất cả các đối tác xuất khẩu nông sản trên cả nước.</p>
            </div>
            <div class="owl-carousel owl-three owl-theme about-main row">
                <div class="col about-main-item">
                    <div class="about-item-img">
                        <img src="./assets/img/icon_uti_1.png" alt="">
                    </div>
                    <div class="about-item-title">
                        <span>Trang trại hữu cơ</span>
                    </div>
                    <div class="about-item-sum">
                        <span>Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất</span>
                    </div>
                </div>
                <div class="col about-main-item">
                    <div class="about-item-img">
                        <img src="./assets/img/icon_uti_2.png" alt="">
                    </div>
                    <div class="about-item-title">
                        <span>Thực phẩm sạch</span>
                    </div>
                    <div class="about-item-sum">
                        <span>Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất</span>
                    </div>
                </div>
                <div class="col about-main-item">
                    <div class="about-item-img">
                        <img src="./assets/img/icon_uti_3.png" alt="">
                    </div>
                    <div class="about-item-title">
                        <span>An toàn sinh học</span>
                    </div>
                    <div class="about-item-sum">
                        <span>Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất</span>
                    </div>
                </div>
                <div class="col about-main-item">
                    <div class="about-item-img">
                        <img src="./assets/img/icon_uti_4.png" alt="">
                    </div>
                    <div class="about-item-title">
                        <span>Đa dạng sinh học</span>
                    </div>
                    <div class="about-item-sum">
                        <span>Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="category_home">
        <div class="grid wide">
            <div class="about-title ">
                <div class="about-heading">
                    <span class="text_gradient">DANH MỤC SẢN PHẨM</span>
                </div>
            </div>
            <div class="tab-link-box">
                <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
                <div class="tab-link">
                    <ul class="ul-link-check">
                        <li class="tag-li tab-link-item tab-link-active" data-title="rau-cu">Rau củ</li>
                        <li class="tag-li tab-link-item" data-title="hoa-qua">Hoa quả</li>
                        <!-- <li class="tag-li tab-link-item" data-title="hai-san">Hải sản</li> -->
                        <li class="tag-li tab-link-item" data-title="cac-loai-hat">Các loại hạt</li>
                        <li class="tag-li tab-link-item" data-title="thuc-pham-tuoi-song">Thực phẩm tươi sống</li>
                    </ul>
                </div>
                <div class="tabs-content">
                    <div id="rau-cu" class="content-tab content-tab-block">
                        <div class="row">
                            <?php
                             $category_id = 1;
                             $sql = "SELECT * FROM product WHERE category_id = '$category_id'";
                                $data = executeResult($sql);
                                   foreach($data as $item) {
                                       echo '
                                       <div class="col l-3 c-6 ">
                                           <div class="content-tab-item">
                                               <div class="product-thumnail">
                                                   <a href="sanpham/'.$item['slug'].'">
                                                       <img src="'.$item['img'].'" alt="">
                                                   </a>
                                               </div>
                                               <div class="product-info">
                                                   <div class="product-name">
                                                       <h3>'.$item['name'].'</h3>
                                                   </div>
                                                   <div class="product-price">
                                                       <h3>'.$item['price'].'</h3>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       ';
                                   }
                            ?>
                        </div>
                    </div>
                    <div id="hoa-qua" class="content-tab">
                        <div class="row">
                            <?php
                                $category_id = 2;
                                $sql = "SELECT * FROM product WHERE category_id = '$category_id'";
                                $data = executeResult($sql);
                                   foreach($data as $item) {
                                       echo '
                                       <div class="col l-3 c-6 ">
                                           <div class="content-tab-item">
                                               <div class="product-thumnail">
                                                   <a href="sanpham/'.$item['slug'].'">
                                                       <img src="'.$item['img'].'" alt="">
                                                   </a>
                                               </div>
                                               <div class="product-info">
                                                   <div class="product-name">
                                                       <h3>'.$item['name'].'</h3>
                                                   </div>
                                                   <div class="product-price">
                                                       <h3>'.$item['price'].'</h3>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       ';
                                   }
                                ?>
                        </div>
                    </div>
                    <div id="cac-loai-hat" class="content-tab">
                        <div class="row">
                        <?php
                                $category_id = 3;
                                $sql = "SELECT * FROM product WHERE category_id = '$category_id'";
                                $data = executeResult($sql);
                                   foreach($data as $item) {
                                       echo '
                                       <div class="col l-3 c-6 ">
                                           <div class="content-tab-item">
                                               <div class="product-thumnail">
                                                   <a href="sanpham/'.$item['slug'].'">
                                                       <img src="'.$item['img'].'" alt="">
                                                   </a>
                                               </div>
                                               <div class="product-info">
                                                   <div class="product-name">
                                                       <h3>'.$item['name'].'</h3>
                                                   </div>
                                                   <div class="product-price">
                                                       <h3>'.$item['price'].'</h3>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       ';
                                   }
                            ?>
                        </div>
                    </div>
                    <div id="thuc-pham-tuoi-song" class="content-tab">
                        <div class="row">
                        <?php
                                $category_id = 4;
                                $sql = "SELECT * FROM product WHERE category_id = '$category_id'";
                                $data = executeResult($sql);
                                   foreach($data as $item) {
                                       echo '
                                       <div class="col l-3 c-6 ">
                                           <div class="content-tab-item">
                                               <div class="product-thumnail">
                                                   <a href="sanpham/'.$item['slug'].'">
                                                       <img src="'.$item['img'].'" alt="">
                                                   </a>
                                               </div>
                                               <div class="product-info">
                                                   <div class="product-name">
                                                       <h3>'.$item['name'].'</h3>
                                                   </div>
                                                   <div class="product-price">
                                                       <h3>'.$item['price'].'</h3>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       ';
                                   }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hotline-home">
        <div class="hotline-home-theme">
            <div class="hotline-content-box">
                <div class="hotline-content">
                    <h2>Hotline</h2>
                    <a class="tag-a" href="tel:0378208856">0372039349</a>
                    <p>Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo chất lượng ngon nhất.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="product-selling">
        <div class="grid wide">
            <div class="about-title ">
                <div class="about-heading">
                    <span class="text_gradient">SẢN PHẨM BÁN CHẠY</span>
                </div>
            </div>
            <div class="product-selling-content">
                <div class="row ">
                    <?php
                        $sql = "SELECT * FROM product WHERE id > 22 limit 4";
                        $data = executeResult($sql);
                        foreach($data as $item) {
                            echo '
                                <div class="col l-3 c-6">
                                    <div class="content-tab-item">
                                        <div class="product-thumnail">
                                            <a href="sanpham/'.$item['slug'].'">
                                                <img src="'.$item['img'].'" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-name">
                                                <h3>'.$item['name'].'</h3>
                                            </div>
                                            <div class="product-price">
                                                <h3>'.$item['price'].'</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="top-thuong-hieu">
        <div class="grid wide">
            <div class="about-title ">
                <div class="about-heading">
                    <span class="text_gradient">TOP THƯƠNG HIỆU</span>
                </div>
            </div>
            <div class="owl-carousel owl-two owl-theme slider-wrapper">
                <div class="item">
                    <img src="./assets/img/brand_1.png" alt="">
                </div>
                <div class="item">
                    <img src="./assets/img/brand_2.png" alt="">
                </div>
                <div class="item">
                    <img src="./assets/img/brand_3.png" alt="">
                </div>
                <div class="item">
                    <img src="./assets/img/brand_4.png" alt="">
                </div>
                <div class="item">
                    <img src="./assets/img/brand_5.png" alt="">
                </div>
                <div class="item">
                    <img src="./assets/img/brand_6.png" alt="">
                </div>
             </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script src="./assets/js/home.js"></script>
<script>
    $(document).ready(function(){
            $('.owl-one').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                // autoplay: true,
                autoplayTimeout:3000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })
            $('.owl-two').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            // autoplay: true,
            autoplayTimeout:3000,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:2
                },
                1000:{
                    items:6
                }
            }
        })
            $('.owl-three').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                // autoplay: true,
                autoplayTimeout:3000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:4
                    }
                }
            })
    })
</script>
<?php 
    require_once('./layouts/footer.php');
?>