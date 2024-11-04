<?php

declare(strict_types=1);

namespace PHPAbles\Arrayable;

trait MagicTrait 
{
    final public function __toArray(): array
    {
        return $this->toArray();
    }
    
    abstract public function toArray(): array;
}
