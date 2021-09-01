<?php

declare(strict_types=1);

namespace Deepvibe\ShellCommandsPipeline\Options;

class Option implements \JsonSerializable
{
    private string $key;
    private $value;

    /**
     * Option constructor.
     * @param string $key
     * @param mixed $value
     */
    public function __construct(string $key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    public function getKey() : string
    {
        return $this->key;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @throws \JsonException
     */
    public function jsonSerialize()
    {
        return json_encode([$this->key => $this->value], JSON_THROW_ON_ERROR);
    }
}
