<?php

declare(strict_types=1);

namespace PHPAble;

use Illuminate\Contracts\Support\Arrayable;

interface ArrayableInterface extends Arrayable
{
    public function toArray();
}
