<?php
    include_once '../database/dbhelper.php';
    include_once '../utils/ulitity.php';
    if(isset($_GET['update_order'])) {
        session_start();
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $data = executeResult($sql,true);
        $user_name = $data['fullname'];
        $product_id = $_GET['update_order'];
        $sql = "UPDATE orders SET status='Đã hủy' WHERE product_id = '$product_id' AND user_name = '$user_name' ";
        execute($sql);
        header('Location: ./');
    }
?>