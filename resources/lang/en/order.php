<?php

return [
    'name' => 'Order',
    'description' => 'Order',
    'attributes' => [
        'seller_id' => [
            'label' => 'Seller',
            'description' => 'a person who sells; salesperson or vender'
        ],
        'buyer_id' => [
            'label' => 'Buyer',
            'description' => 'a person who buys; purchaser'
        ]
    ],
    'tabs' => [
        'items' => 'Items'
    ]
]