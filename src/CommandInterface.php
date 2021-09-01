<?php

declare(strict_types=1);

namespace Deepvibe\ShellCommandsPipeline;

use Deepvibe\ShellCommandsPipeline\Options\OptionsSet;

/**
 * Interface CommandInterface
 *
 * @template T of ShellCommandInterface
 *
 * @package Deepvibe\ShellCommandsPipeline
 * @author  Yurii Oblovatskyi yuriyobl@gmail.com>
 */
interface CommandInterface
{
    /**
     * @param T $payload
     *
     * @return mixed
     */
    public function __invoke($payload);

    public function setOptions(OptionsSet $options);
}
