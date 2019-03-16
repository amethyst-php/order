<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\OrdersController::class,
    'router'     => [
        'as'     => 'order.',
        'prefix' => '/orders',
    ],
];
