<?php

declare(strict_types=1);

namespace Codexshaper\WooCommerce\Facades;

use Codexshaper\WooCommerce\WooCommerceAnalyticsApi;
use Illuminate\Support\Facades\Facade;

final class WooAnalytics extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return WooCommerceAnalyticsApi::class;
    }
}
