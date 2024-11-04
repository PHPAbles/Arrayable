<?php

declare(strict_types=1);

namespace PHPAbles\Arrayable;

use PhpExtended\Arrayable\ArrayableObject;

abstract class AbstractArrayable extends ArrayableObject implements ArrayableInterface
{
    use MagicTrait;
}
