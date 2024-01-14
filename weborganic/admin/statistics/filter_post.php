<?php
header('Content-Type: application/json');

require_once ('../../database/dbhelper.php');

function converstDate($dateString){
    $timestamp = strtotime($dateString);

    // Convert the timestamp to the desired date format
    $newDateString = date('d-m-y H:i:s', $timestamp);
    
    return $newDateString;
}

if(isset($_POST)){

    $from = converstDate($_POST['form']);
    $to = converstDate($_POST['to']);
    
$sql = "SELECT *, DATE_FORMAT(created_at, '%d-%m-%y %H:%i:%s') AS formatted_created_at FROM orders WHERE created_at BETWEEN '$from' AND '$to' AND status = 'Đã thanh toán'";
$data = executeResult($sql);

$list_order = [];
foreach ($data as $item) {
    if (in_array($item, $list_order)) {
        // Skip duplicates
    } else {
        array_unshift($list_order, $item);
    }
}


$result = [];
foreach ($list_order as $item) {
    $timestamp = strtotime($item['created_at']);
    $formattedDate = date('m/d', $timestamp);
    $period = $formattedDate;
    $quantity = isset($item['num']) ? $item['num'] : 1;
    $price = floatval($item['total']) * floatval($quantity);

    if (!isset($result[$period])) {
        $result[$period] = [
            'period' => $period,
            'quantity' => $quantity,
            'price' => $price
        ];
    } else {
        $result[$period]['quantity'] += $quantity;
        $result[$period]['price'] += $price;
    }
}

// Re-index the result array to remove the date keys
$result = array_values($result);

echo json_encode($result);


}