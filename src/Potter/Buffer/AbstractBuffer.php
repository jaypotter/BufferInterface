<?php

declare(strict_types=1);

namespace Potter\Buffer;

abstract class AbstractBuffer implements BufferInterface
{
    abstract public function clean(): void;
    abstract public function flush(): void;
    abstract public function getContents(): string;
    abstract public function getLength(): int;
}