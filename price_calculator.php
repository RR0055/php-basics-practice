<?php
//商品情報
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

//ここから計算
$sabtotal = $price * $quantity;
$tax_amount = $sabtotal * $tax_rate;
$total = $sabtotal + $tax_amount;

//表示されるもの
echo "商品名: {$product_name}<br>";
echo "単価: {$price}円<br>";
echo "数量: {$quantity}個<br>";
echo "小計: {$sabtotal}円<br>";
echo "消費税(10%): {$tax_amount}円<br>";
echo "<strong>合計金額: {$total}円</strong><br>";
?>