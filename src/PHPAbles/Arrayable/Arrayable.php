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
        $inheritable = ($array instanceOf IlluminateArrayable) ||
                       ($array instanceOf InspirumArrayable) ||
                       ($array instanceOf PhpExtendedArrayable);
        if ($inheritable) {
            $this->inherit($array);
            return;
        }
        $this->array = $array;
    }
    
    public function toArray(): array
    {
        $array = parent::toArray();
        return array_key_exists('array', $array) ? $array['array'] : [];
    }
    
    private function inherit(IlluminateArrayable|InspirumArrayable|PhpExtendedArrayable $arrayable): void
    {
        if (($arrayable instanceOf IlluminateArrayable) ||
            ($arrayable instanceOf PhpExtendedArrayable)) {
            $this->array = $arrayable->toArray();
            return;
        }
        $this->array = $arrayable->__toArray();
    }
}
