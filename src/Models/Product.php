<?php

declare(strict_types=1);

namespace Codexshaper\WooCommerce\Models;

use Codexshaper\WooCommerce\Traits\QueryBuilderTrait;

final class Product extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'products';
}
