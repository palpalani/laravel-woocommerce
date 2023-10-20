<?php

declare(strict_types=1);

namespace Codexshaper\WooCommerce\Facades;

use Illuminate\Support\Facades\Facade;

final class Customer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Codexshaper\WooCommerce\Models\Customer';
    }
}
