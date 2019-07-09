<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\OrderItemsController::class,
    'router'     => [
        'as'     => 'order-item.',
        'prefix' => '/order-items',
    ],
];
