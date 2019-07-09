<?php

namespace Amethyst\Providers;

use Amethyst\Common\CommonServiceProvider;

class OrderServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Amethyst\Providers\LegalEntityServiceProvider::class);
        $this->app->register(\Amethyst\Providers\ProductServiceProvider::class);
    }
}
