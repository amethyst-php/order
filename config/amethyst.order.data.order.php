<?php

return [
    'table'      => 'amethyst_orders',
    'comment'    => 'Order',
    'model'      => Railken\Amethyst\Models\Order::class,
    'schema'     => Railken\Amethyst\Schemas\OrderSchema::class,
    'repository' => Railken\Amethyst\Repositories\OrderRepository::class,
    'serializer' => Railken\Amethyst\Serializers\OrderSerializer::class,
    'validator'  => Railken\Amethyst\Validators\OrderValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\OrderAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\OrderFaker::class,
    'manager'    => Railken\Amethyst\Managers\OrderManager::class,
];
