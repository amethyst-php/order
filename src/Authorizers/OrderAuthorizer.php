<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class OrderAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'order.create',
        Tokens::PERMISSION_UPDATE => 'order.update',
        Tokens::PERMISSION_SHOW   => 'order.show',
        Tokens::PERMISSION_REMOVE => 'order.remove',
    ];
}
