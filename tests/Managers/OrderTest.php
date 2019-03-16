<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\OrderFaker;
use Railken\Amethyst\Managers\OrderManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class OrderTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = OrderManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = OrderFaker::class;
}
