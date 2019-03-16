<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Managers\OrderManager;
use Railken\Amethyst\Managers\ProductManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class OrderItemSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\BelongsToAttribute::make('order_id')
                ->setRelationName('order')
                ->setRelationManager(OrderManager::class)
                ->setRequired(true),
            Attributes\BelongsToAttribute::make('product_id')
                ->setRelationName('product')
                ->setRelationManager(ProductManager::class)
                ->setRequired(true),
            Attributes\NumberAttribute::make('quantity'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
