<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\OrdersController::class,
    'router'     => [
        'as'     => 'order.',
        'prefix' => '/orders',
    ],
];
