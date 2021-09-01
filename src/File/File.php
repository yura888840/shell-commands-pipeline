<?php

declare(strict_types=1);

namespace Deepvibe\ShellCommandsPipeline\File;

use Deepvibe\ShellCommandsPipeline\GenericType\Collection;

class File implements FileInterface
{
    private string $fileName;

    private Collection $options;

    public function __construct(string $fileName, Collection $options)
    {
        $this->fileName = $fileName;
        $this->options = $options;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function getOptions(): Collection
    {
        return $this->options;
    }
}
