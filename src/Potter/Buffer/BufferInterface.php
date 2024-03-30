<?php

declare(strict_types=1);

namespace Potter\Buffer;

interface BufferInterface 
{
    public function clean(): void;
    public function flush(): void;
    public function getContents(): string;
    public function getLength(): int;
}