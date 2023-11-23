<?php

class matahari {
public static function belanja($items) {
$totalPrice = 0;
foreach ($items as $item) {
$itemName = $item['nama'];
$itemPrice = $item['harga'];
$itemQty = $item['banyak'];

switch ($itemName) {
case 'Pakaian Anak':
if ($itemQty >= 2) {
$itemPrice *= 0.8; 
}
break;
case 'Pakaian Laki-laki Dewasa':
if ($item['Member']) {
$itemPrice *= 0.65; 
}
break;
case 'Pakaian Wanita Dewasa':
    $itemPrice = max($itemPrice, 0); 
break;
}

$totalPrice += $itemPrice * $itemQty;
}

return $totalPrice + (count($items) * 2000); 
}
}
?>