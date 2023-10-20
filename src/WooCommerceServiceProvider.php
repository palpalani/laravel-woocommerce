<?php

declare(strict_types=1);

namespace Codexshaper\WooCommerce;

use Illuminate\Support\ServiceProvider;

final class WooCommerceServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/config/woocommerce.php' => config_path('woocommerce.php'),
        ], 'woocommerce');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/woocommerce.php',
            'woocommerce'
        );

        $this->app->singleton('WooCommerceApi', fn () => new WooCommerceApi);
        $this->app->alias('Codexshaper\Woocommerce\WooCommerceApi', 'WooCommerceApi');
    }
}
