<?php
session_start();
require_once ('../database/dbhelper.php');
header("content-type: application/json; charset=UTF-8");
http_response_code(200); //200 - Everything will be 200 Oke

if (!empty($_GET)) {
    $response = array();
    try {
        $resultCode = $_GET["resultCode"];

        // $stt = $_SESSION['idOrder'];
        // $value_thanh_toan = 'Đang xử lý';
        // $sql2 = "SELECT * FROM orders WHERE stt='$stt'";
        // $data2= executeResult($sql2);
        // foreach($data2 as $a) {
        //     // var_dump($a);
        //     $sql = "UPDATE orders SET status='$value_thanh_toan' WHERE stt='$stt'";
        //     execute($sql);
        // }
        // header('Location: http://localhost/weborganic/success/basic.php');

            if ($resultCode == '0') {
                $stt = $_SESSION['idOrder'];
                $value_thanh_toan = 'Đã thanh toán';
                $sql2 = "SELECT * FROM orders WHERE stt='$stt'";
                $data2= executeResult($sql2);
                foreach($data2 as $a) {
                    // var_dump($a);
                    $sql = "UPDATE orders SET status='$value_thanh_toan' WHERE stt='$stt'";
                    execute($sql);
                }
                header('Location: http://localhost/weborganic/success/basic.php');
            } else {
                $result = '<div class="alert alert-danger">' . $message . '</div>';
                $response['result'] = $result;
                header('Location: http://localhost/weborganic');
            }


    } catch (Exception $e) {
        echo $response['message'] = $e;
    }
}

?>
