<?php
function countBasket($basket)
{
    $countBasket = 0;
    foreach ($basket as &$value) {
        $countBasket += $value['quantity'];
    }
    return $countBasket;
}
$basket =([
    [
    'position' => 'книга по php',
    'quantity' => 1,
    ],
    [
    'position' => 'Мышь беспроводная',
    'quantity' => 12,
    ]
]);
echo countBasket($basket);
?> 