<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\OrderItemFaker;
use Railken\Amethyst\Managers\OrderItemManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class OrderItemTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = OrderItemManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = OrderItemFaker::class;
}
