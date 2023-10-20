<?php

declare(strict_types=1);

namespace Codexshaper\WooCommerce\Models;

use Codexshaper\WooCommerce\Traits\QueryBuilderTrait;

final class Webhook extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'webhooks';
}
