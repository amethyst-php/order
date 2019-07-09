<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class OrderItemAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'order-item.create',
        Tokens::PERMISSION_UPDATE => 'order-item.update',
        Tokens::PERMISSION_SHOW   => 'order-item.show',
        Tokens::PERMISSION_REMOVE => 'order-item.remove',
    ];
}
