<?php

declare(strict_types=1);

namespace Deepvibe\ShellCommandsPipeline\Options;

use Deepvibe\ShellCommandsPipeline\GenericType\Collection;

class OptionsSet extends Collection
{
    public function __construct(...$options)
    {
        foreach ($options as $option) {
            if (!($option instanceof Option)) {
                throw new \InvalidArgumentException(sprintf('Argument should be instanceof %s !', Option::class));
            }

            $this->collection[] = $option;
        }
    }
}
