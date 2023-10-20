<?php

declare(strict_types=1);

namespace Codexshaper\WooCommerce\Models;

use Codexshaper\WooCommerce\Traits\QueryBuilderTrait;

final class Category extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'products/categories';
}
