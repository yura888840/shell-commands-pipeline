<?php

declare(strict_types=1);

namespace Deepvibe\ShellCommandsPipeline;

/**
 * Interface ShellCommandInterface
 *
 * @template T of ShellCommandInterface
 *
 * @package Deepvibe\ShellCommandsPipeline
 * @author  Yurii Oblovatskyi yuriyobl@gmail.com>
 */
interface ShellCommandInterface
{
    /**
     * @param T $payload
     *
     * @return mixed
     */
    public function __invoke($payload);
}

