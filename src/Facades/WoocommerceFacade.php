<?php

declare(strict_types=1);

namespace Codexshaper\Woocommerce\Facades;

use Illuminate\Support\Facades\Facade;

final class WoocommerceFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Codexshaper\Woocommerce\WooCommerceApi';
    }
}
