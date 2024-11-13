<?php

declare(strict_types=1);

namespace PHPAbles\Arrayable;

use Illuminate\Contracts\Support\Arrayable as IlluminateArrayable,
    Inspirum\Arrayable\Arrayable as InspirumArrayable,
    PhpExtended\Arrayable\ArrayableInterface as PhpExtendedArrayable;

final class Arrayable extends AbstractArrayable
{
    private array $array;
    
    public function __construct(array|IlluminateArrayable|InspirumArrayable|PhpExtendedArrayable $array)
    {
        if (is_array($array)) {
            $this->array = $array;
            return;
        }
        $this->inherit($array);
    }
    
    public function toArray(): array
    {
        return $this->array;
    }
    
    private function inherit(IlluminateArrayable|InspirumArrayable|PhpExtendedArrayable $arrayable): void
    {
        if (($arrayable instanceOf IlluminateArrayable) ||
            ($arrayable instanceOf PhpExtendedArrayable)) {
            $this->array = $arrayable->toArray();
            return;
        }
        $this->array = $arrayable->_toArray();
    }
}
