<?php

declare(strict_types=1);

namespace Codexshaper\WooCommerce\Models;

use Exception;

class BaseModel
{
    private $properties = [];

    /**
     * Get  Inaccessible Property.
     *
     * @param  string  $name
     * @return int|string|array|object|null
     */
    public function __get($name)
    {
        return $this->$name;
    }

    /**
     * Set Option.
     *
     * @param  string  $name
     * @param  string  $value
     * @return void
     */
    public function __set($name, $value): void
    {
        $this->properties[$name] = $value;
    }

    public function __call($method, $parameters)
    {
        if ( ! method_exists($this, $method)) {
            preg_match_all('/((?:^|[A-Z])[a-z]+)/', $method, $partials);
            $method = array_shift($partials[0]);
            if ( ! method_exists($this, $method)) {
                throw new Exception('Sorry! you are calling wrong method');
            }
            array_unshift($parameters, mb_strtolower(implode('_', $partials[0])));
        }

        return $this->$method(...$parameters);
    }

    public static function __callStatic($method, $parameters)
    {
        return (new self)->$method(...$parameters);
    }
}
