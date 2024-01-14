<?php
    $title = 'Tất cả sản phẩm';
    $baseUrl = '../';
    include_once $baseUrl.'layouts/header.php'
?>
<link rel="stylesheet" href="<?=$baseUrl?>assets/css/category-main.css">
<div class="breadcrumb_bg">
    <div class="breadcrumb-box-img">
        <img src="../assets/img/bg_breadcrumb.png" alt="">
    </div>
    <div class="title-full">
        <div class="container">
            <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
            <p class="title-page">Tất cả sản phẩm</p>
        </div>
    </div>
</div>
<div class="category-main">
    <div class="grid wide">
        <div class="category-header">
            <h1>Tất cả sản phẩm</h1>
            <div class="arrange">
                <div class="sort-cate">
                    <div class="sort-cate-left">
                        <h3>Sắp xếp theo:</h3>
                        <ul class="sort-cate-list">
                            <li class="btn-quick-sort sort-cate-item tag-li">
                                <span><i class="fa-solid fa-check"></i></span>
                                
                                A → Z
                            </li>
                            <li class="btn-quick-sort sort-cate-item tag-li">
                                <span><i class="fa-solid fa-check"></i></span>
                                Z → A
                            </li>
                            <li class="btn-quick-sort sort-cate-item tag-li">
                                <span><i class="fa-solid fa-check"></i></span>
                                 Giá tăng dần
                            </li>
                            <li class="btn-quick-sort sort-cate-item tag-li">
                                <span><i class="fa-solid fa-check"></i></span>
                                 Giá giảm dần
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-tab content-tab-block">
            <div class="row">
                <?php
                    $sql = "SELECT count(id) as number FROM product";
                    $data = executeResult($sql,true);
                    $number = 0;
                    if($data != null && count($data)>0) {
                        $number = $data['number'];
                    }
                    $page = ceil($number/12);
                    $current_page = 1;
                    if(isset($_GET['page'])) {
                        $current_page = $_GET['page'];
                    }else {
                        $current_page = 1;
                    }
                    $index = ($current_page - 1)*12;
                    $sql = "SELECT * FROM product ORDER BY id DESC limit $index,12";
                    $data = executeResult($sql);
                       foreach($data as $item) {
                           echo '
                           <div class="col l-3 c-6">
                               <div class="content-tab-item">
                                   <div class="product-thumnail">
                                       <a href="'.$baseUrl.'sanpham/?slug='.$item['slug'].'">
                                           <img src="'.$baseUrl.$item['img'].'" alt="">
                                       </a>
                                   </div>
                                   <div class="product-info">
                                       <div class="product-name">
                                           <h3>'.$item['name'].'</h3>
                                       </div>
                                       <div class="product-price">
                                           <h3>'.number_format($item['price']).'</h3>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           ';
                       }
                ?>
            </div>
            <?php
                if(isset($page)) {
                    if($page>1) {
                        echo '<div class="pagination">
                                <div class="total-page">
                                    <span>Trang '.$current_page.' trên '.$page.'</span>
                                </div>';
                                for($i=1;$i<$page+1;$i++) {
                                    if($i==$current_page) {
                                        echo '<a href="?page='.$i.'" class="tag-a page-items page-current">'.$i.'</a>';
                                    }else {
                                        echo '<a href="?page='.$i.'" class="tag-a page-items">'.$i.'</a>';
                                    }
                                }
                                if($current_page<$i-1) {
                                    $next_page = $current_page+1;
                                }else {
                                    $next_page = $current_page;
                                }
                                echo '<a href="?page='.$next_page.'" class="tag-a next-page">
                                        <i class="fa-solid fa-angles-right"></i>
                                    </a>
                                </div>';
                    }
                }

            ?>
        </div>
    </div>
</div>
<script>
    const ticks = document.querySelectorAll('.sort-cate-item span')
    for(let i=0;i<ticks.length;i++) {
        ticks[i].onclick = function() {
            alert('Tính năng này đang được cập nhật, vui lòng thử lại sau!!!')
        }
    }
</script>
<?php
    include_once $baseUrl.'layouts/footer.php';
?>