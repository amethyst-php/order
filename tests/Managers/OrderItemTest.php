<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\OrderItemFaker;
use Amethyst\Managers\OrderItemManager;
use Amethyst\Tests\BaseTest;
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
