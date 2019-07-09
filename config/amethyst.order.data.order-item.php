<?php

return [
    'table'      => 'amethyst_order_items',
    'comment'    => 'OrderItem',
    'model'      => Amethyst\Models\OrderItem::class,
    'schema'     => Amethyst\Schemas\OrderItemSchema::class,
    'repository' => Amethyst\Repositories\OrderItemRepository::class,
    'serializer' => Amethyst\Serializers\OrderItemSerializer::class,
    'validator'  => Amethyst\Validators\OrderItemValidator::class,
    'authorizer' => Amethyst\Authorizers\OrderItemAuthorizer::class,
    'faker'      => Amethyst\Fakers\OrderItemFaker::class,
    'manager'    => Amethyst\Managers\OrderItemManager::class,
];
