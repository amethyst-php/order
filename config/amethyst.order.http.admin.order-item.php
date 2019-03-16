<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\OrderItemsController::class,
    'router'     => [
        'as'     => 'order-item.',
        'prefix' => '/order-items',
    ],
];
