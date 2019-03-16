<?php

return [
    'table'      => 'amethyst_order_items',
    'comment'    => 'OrderItem',
    'model'      => Railken\Amethyst\Models\OrderItem::class,
    'schema'     => Railken\Amethyst\Schemas\OrderItemSchema::class,
    'repository' => Railken\Amethyst\Repositories\OrderItemRepository::class,
    'serializer' => Railken\Amethyst\Serializers\OrderItemSerializer::class,
    'validator'  => Railken\Amethyst\Validators\OrderItemValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\OrderItemAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\OrderItemFaker::class,
    'manager'    => Railken\Amethyst\Managers\OrderItemManager::class,
];
