<?php

declare(strict_types=1);

namespace Codexshaper\WooCommerce\Models;

use Codexshaper\WooCommerce\Traits\QueryBuilderTrait;

final class Coupon extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'coupons';
}
