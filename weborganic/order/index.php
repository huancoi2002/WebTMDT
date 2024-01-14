<?php
    $title = "Đơn hàng của bạn";
    $baseUrl = '../';
    include_once ($baseUrl.'layouts/header.php');
    $page = getGet('page');
    $class = 'active';
    $class2='';
    $class1 = '';
    $class3 = '';
    $class4 = '';
    $class5= '';
    $class6 = '';
    $sql2 = '';

    if(isset($_SESSION['email'])) {
        $email =  $_SESSION['email'];
        $sql = "SELECT * FROM user WHERE email ='$email'";
        $data = executeResult($sql,true);
        $user_name = $data['fullname'];

        
    
        if(!isset($page)) {
            $class1 = 'active';
            
        } else if($page ==2) {
            $class2 = 'active';
            $sql2 = "SELECT * FROM orders WHERE user_name1 = '$user_name' AND status='Đã xác nhận'";
            
        }else if($page ==3) {
            $class3 = 'active';
            $sql2 = "SELECT * FROM orders WHERE user_name1 = '$user_name' AND status='Đang xử lý'";
            
        }else if($page ==4) {
            $class4 = 'active';
            $sql2 = "SELECT * FROM orders WHERE user_name1 = '$user_name' AND status='Đang giao'";

        }else if($page ==5) {
            $class5 = 'active';
            $sql2 = "SELECT * FROM orders WHERE user_name1 = '$user_name' AND status='Đã giao'";
        }else if($page ==6) {
            $class6 = 'active';
            $sql2 = "SELECT * FROM orders WHERE user_name1 = '$user_name' AND status='Đã hủy'";
        }else {
            $class1 = 'active';
            $sql2 = "SELECT * FROM orders WHERE user_name1 = '$user_name' AND NOT status='Đã hủy' ";
        }
        
        $orderList= executeResult($sql2);
        
    }
    
?>

<link rel="stylesheet" href="<?=$baseUrl?>assets/css/cart.css">
<link rel="stylesheet" href="<?=$baseUrl?>assets/css/order.css">
<div class="breadcrumb_bg">
    <div class="breadcrumb-box-img">
        <img src="../assets/img/bg_breadcrumb.png" alt="">
    </div>
    <div class="title-full">
        <div class="container">
            <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
            <p class="title-page">Đơn hàng của bạn - Oars Organic</p>
        </div>
    </div>
</div>

<div class="order-main">
    <div class="grid wide">
        <div class="order-header">
            <div class="group-header">
                <a href="../order" class="tag-a order-header-item <?=$class1?>">Tất cả</a>
                <a href="?page=3" class="tag-a order-header-item <?=$class3?> ">Đang xử lý</a>
                <a href="?page=2" class="tag-a order-header-item <?=$class2?> ">Đã xác nhận</a>
                <a href="?page=4" class="tag-a order-header-item <?=$class4?>">Đang giao</a>
                <a href="?page=5" class="tag-a order-header-item <?=$class5?>">Đã giao</a>
                <a href="?page=6" class="tag-a order-header-item <?=$class6?>">Đã hủy</a>
            </div>
        </div>
    </div>
</div>

<div class="cart">
    <div class="grid wide">
        <form action="" method="post">
            <div class="cart-main">
                <?php
                    if(isset($orderList)) {
                        foreach($orderList as $item) {
                            $money_detail = 0;
                            $product_id = $item['product_id'];
                            $sql = "SELECT * FROM product WHERE id = '$product_id'";
                            $data = executeResult($sql,true);
                            $price = intval(preg_replace('/[^\d.]/', '', $data['price']));
                            $money_detail = $item['num'] * $price;
                            // $total_money_main = $total_money_main + $money_detail;
                            echo '
                            
                                <div class="cart-item">
                                    <div class="cart-item-left">
                                        <div class="cart-img">
                                            <img src="'.$baseUrl.$data['img'].'" alt="">
                                        </div>
                                        <div class="cart-name-price">
                                            <div class="cart-name">
                                                <span>'.$data['name'].'</span>
                                            </div>
                                            <div class="cart-price" style="margin-top:10px;">
                                                <h3>'.$data['price'].'đ</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item-right">
                                        <div class="total-item">
                                            <div class="total-title" style="text-align:end;">
                                                <span>Tổng tiền:</span>
                                            </div>
                                            <div class="total-item-main">
                                                <h3 style="text-align:end;">'.number_format($money_detail).'đ</h3>
                                            </div>';
                                            
                                            if($page != 6) {
                                                echo '
                                                <div class="cart-item-delete">
                                                    <a style="font-weight: 600;" href="../order/update_order.php?update_order='.$item['product_id'].'" class="tag-a">
                                                        <i class="fa-solid fa-trash"></i>
                                                        Hủy đơn hàng
                                                    </a>
                                                </div>
                                                ';
                                            } else {
                                                echo '
                                                <div class="cart-item-delete">
                                                <a href="../order/delete_cart.php?delete_cart='.$item['product_id'].'" class="tag-a">
                                                    <i class="fa-solid fa-trash"></i>
                                                    Xóa
                                                </a>
                                            </div>
                                                ';
                                            };


                                            echo '
                                        </div>
                                    </div>
                                </div>'
                            
                            ;
                        }
                    }
                ?>
            </div>
        </form>
    </div>
</div>



<?php
    include_once ($baseUrl.'layouts/footer.php');
?>