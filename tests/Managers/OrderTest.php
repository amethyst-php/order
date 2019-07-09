<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\OrderFaker;
use Amethyst\Managers\OrderManager;
use Amethyst\Tests\BaseTest;
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
