<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\OrderItem                 newEntity()
 * @method \Amethyst\Schemas\OrderItemSchema          getSchema()
 * @method \Amethyst\Repositories\OrderItemRepository getRepository()
 * @method \Amethyst\Serializers\OrderItemSerializer  getSerializer()
 * @method \Amethyst\Validators\OrderItemValidator    getValidator()
 * @method \Amethyst\Authorizers\OrderItemAuthorizer  getAuthorizer()
 */
class OrderItemManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.order.data.order-item';
}
