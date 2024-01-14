<?php
header('Content-Type: application/json');

require_once ('../../database/dbhelper.php');

$sql = "SELECT * FROM orders where status = 'Đã thanh toán'";
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
    $price = floatval($item['total'])* 1000 * floatval($quantity);

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

