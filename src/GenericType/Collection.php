<?php

declare(strict_types=1);

namespace Deepvibe\ShellCommandsPipeline\GenericType;

use JsonSerializable;

class Collection  implements \Iterator, JsonSerializable
{
    protected array $collection = [];

    protected int $position = 0;

    public function isEmpty(): bool
    {
        return empty($this->collection);
    }

    public function getCollection(): array
    {
        return $this->collection;
    }

    public function current()
    {
        return $this->collection[$this->position] ?? null;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return isset($this->collection[$this->position]);
    }

    public function jsonSerialize(): array
    {
        return array_reduce($this->collection, static function (array $return, JsonSerializable $item) {
            $return[] = $item->jsonSerialize();

            return $return;
        }, []);
    }
}
