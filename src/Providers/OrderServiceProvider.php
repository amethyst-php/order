<?php

namespace Railken\Amethyst\Providers;

use Railken\Amethyst\Common\CommonServiceProvider;

class OrderServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Railken\Amethyst\Providers\LegalEntityServiceProvider::class);
        $this->app->register(\Railken\Amethyst\Providers\ProductServiceProvider::class);
    }
}
