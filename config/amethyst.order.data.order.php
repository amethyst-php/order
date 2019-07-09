<?php

return [
    'table'      => 'amethyst_orders',
    'comment'    => 'Order',
    'model'      => Amethyst\Models\Order::class,
    'schema'     => Amethyst\Schemas\OrderSchema::class,
    'repository' => Amethyst\Repositories\OrderRepository::class,
    'serializer' => Amethyst\Serializers\OrderSerializer::class,
    'validator'  => Amethyst\Validators\OrderValidator::class,
    'authorizer' => Amethyst\Authorizers\OrderAuthorizer::class,
    'faker'      => Amethyst\Fakers\OrderFaker::class,
    'manager'    => Amethyst\Managers\OrderManager::class,
];
