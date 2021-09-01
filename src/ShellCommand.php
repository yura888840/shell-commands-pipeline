<?php

declare(strict_types=1);

namespace Deepvibe\ShellCommandsPipeline;

use Deepvibe\ShellCommandsPipeline\File\FileCollection;

abstract class ShellCommand extends Command
{
    protected FileCollection $files;

    public function setFiles(FileCollection $files): void
    {
        $this->files = $files;
    }
}
