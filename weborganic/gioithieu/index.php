<?php
    $title = 'Giới thiệu';
    $baseUrl = '../';
    include_once ($baseUrl.'layouts/header.php');
?>
<style>
    .content-page {
        padding: 15px 0;
    }
    .title-head a{
        color: #000;
    }
    @media  screen and (max-width:740px) {
        .gioi-thieu {
            padding: 0 15px;
        }
    }
</style>

<div class="breadcrumb_bg">
    <div class="breadcrumb-box-img">
        <img src="../assets/img/bg_breadcrumb.png" alt="">
    </div>
    <div class="title-full">
        <div class="container">
            <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
            <p class="title-page">Giới thiệu</p>
        </div>
    </div>
</div>
<div class="gioi-thieu">
    <div class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="page-title category-title">
                    <h1 class="title-head"><a href="#" class="tag-a">Giới thiệu</a></h1>
                </div>
                <div class="content-page">
                    <p style="padding-bottom: 15px;line-height: 25px;">Trang giới thiệu giúp khách hàng hiểu rõ hơn về cửa hàng của bạn. Hãy cung cấp thông tin cụ thể về việc kinh doanh, về cửa hàng, thông tin liên hệ. Điều này sẽ giúp khách hàng cảm thấy tin tưởng khi mua hàng trên website của bạn.</p>
                    <p>Một vài gợi ý cho nội dung trang Giới thiệu:</p>
                    <ul style="padding-top: 10px;padding-left:40px;">
                        <li style="padding-top: 5px;;" class="">Bạn là ai</li>
                        <li style="padding-top: 5px;;" class="">Giá trị kinh doanh của bạn là gì</li>
                        <li style="padding-top: 5px;;" class="">Địa chỉ cửa hàng</li>
                        <li style="padding-top: 5px;;" class="">Bạn đã kinh doanh trong ngành hàng này bao lâu rồi</li>
                        <li style="padding-top: 5px;;" class="">Bạn kinh doanh ngành hàng online được bao lâu</li>
                        <li style="padding-top: 5px;;" class="">Đội ngũ của bạn gồm những ai</li>
                        <li style="padding-top: 5px;;" class="">Thông tin liên hệ</li>
                        <li style="padding-top: 5px;;" class="">Liên kết đến các trang mạng xã hội (Twitter, Facebook)</li>
                    </ul>
                    <p style="padding-top: 20px;">Bạn có thể chỉnh sửa hoặc xoá bài viết này tại đây hoặc thêm những bài viết mới trong phần quản lý Trang nội dung.</p>
                </div>
            </div>
        </div>
    </div>
</div>








<?php
include_once ($baseUrl.'layouts/footer.php');
?>