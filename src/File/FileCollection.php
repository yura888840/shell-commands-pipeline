<?php

declare(strict_types=1);

namespace Deepvibe\ShellCommandsPipeline\File;

use Deepvibe\ShellCommandsPipeline\GenericType\Collection;

class FileCollection extends Collection
{
    public function __construct(...$files)
    {
        foreach ($files as $file) {
            if (!($file instanceof File)) {
                throw new \InvalidArgumentException(sprintf('Argument should be instanceof %s !', File::class));
            }

            $this->collection[] = $file;
        }
    }
}
