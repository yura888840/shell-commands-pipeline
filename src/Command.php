<?php

declare(strict_types=1);

namespace Deepvibe\ShellCommandsPipeline;

use Deepvibe\ShellCommandsPipeline\Options\OptionsSet;

abstract class Command implements CommandInterface
{
    protected OptionsSet $options;

    abstract public function __invoke($payload);

    public function setOptions(OptionsSet $options): void
    {
        $this->options = $options;
    }
}
