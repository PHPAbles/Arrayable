<?php

declare(strict_types=1);

namespace Potter\Arrayable;

use Illuminate\Contracts\Support\Arrayable;

interface ArrayableInterface extends Arrayable
{
    public function toArray(): array;
}
