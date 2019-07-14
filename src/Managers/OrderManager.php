<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Order newEntity()
 * @method \Amethyst\Schemas\OrderSchema getSchema()
 * @method \Amethyst\Repositories\OrderRepository getRepository()
 * @method \Amethyst\Serializers\OrderSerializer getSerializer()
 * @method \Amethyst\Validators\OrderValidator getValidator()
 * @method \Amethyst\Authorizers\OrderAuthorizer getAuthorizer()
 */
class OrderManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.order.data.order';
}
