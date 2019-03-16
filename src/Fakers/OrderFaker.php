<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class OrderFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('seller', LegalEntityFaker::make()->parameters()->toArray());
        $bag->set('buyer', LegalEntityFaker::make()->parameters()->toArray());

        return $bag;
    }
}
