<?php

declare(strict_types=1);

namespace CodexShaper\Dumper\Test;

use PHPUnit\Framework\TestCase;

final class Product extends TestCase
{
    /** @test */
    public function it_provides_a_factory_method(): void
    {
        $this->assertSame(true, true);
    }
}
