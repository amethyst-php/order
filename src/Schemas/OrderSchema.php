<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\LegalEntityManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class OrderSchema extends Schema
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
            Attributes\BelongsToAttribute::make('seller_id')
                ->setRelationName('seller')
                ->setRelationManager(LegalEntityManager::class)
                ->setRequired(true),
            Attributes\BelongsToAttribute::make('buyer_id')
                ->setRelationName('buyer')
                ->setRelationManager(LegalEntityManager::class)
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
