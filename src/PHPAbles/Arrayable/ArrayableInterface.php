<?php

declare(strict_types=1);

namespace PHPAbles\Arrayable;

use Illuminate\Contracts\Support\Arrayable as IlluminateArrayable,
    Inspirum\Arrayable\Arrayable as InspirumArrayable,
    PhpExtended\Arrayable\ArrayableInterface as PhpExtendedArrayable;

interface ArrayableInterface extends IlluminateArrayable, InspirumArrayable, PhpExtendedArrayable
{
    public function toArray(): array;
    public function __toArray(): array;
}
