<?php
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
            <p class="title-page"><?=$title?></p>
        </div>
    </div>
</div>
<div class="category-main">
    <div class="grid wide">
        <div class="category-header">
            <h1><?=$title?></h1>
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
                    $sql = "SELECT * FROM product WHERE category_id = '$category_id'";
                    $data = executeResult($sql);
                       foreach($data as $item) {
                           echo '
                           <div class="col l-3 ">
                               <div class="content-tab-item">
                                   <div class="product-thumnail">
                                       <a href="'.$baseUrl.'sanpham/'.$item['slug'].'">
                                           <img src="'.$baseUrl.$item['img'].'" alt="">
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
<script>
    const ticks = document.querySelectorAll('.sort-cate-item span')
    for(let i=0;i<ticks.length;i++) {
        ticks[i].onclick = function() {
            alert('Tính năng này đang được cập nhật, vui long thử lại sau!!!')
        }
    }
</script>
<?php
    include_once $baseUrl.'layouts/footer.php';
?>