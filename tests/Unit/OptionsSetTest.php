<?php

declare(strict_types=1);

namespace Deepvibe\ShellCommandsPipeline\Tests\Unit;

use Deepvibe\ShellCommandsPipeline\Options\Option;
use Deepvibe\ShellCommandsPipeline\Options\OptionsSet;
use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

/**
 * Class ShellCommandServiceTest
 * @package Deepvibe\ShellCommandsPipeline\Tests\Unit
 * @author  Yurii Oblovatskyi yuriyobl@gmail.com>
 */
class OptionsSetTest extends TestCase
{
    use ProphecyTrait;

    public function testSetHasOptions(): void
    {
        $options = [
            new Option('a', 8080),
            new Option('codec', 'codec')
        ];

        $set = new OptionsSet(...$options);

        $expected = [
            '{"a":8080}',
            '{"codec":"codec"}',
        ];
        self::assertSame($set->jsonSerialize(), $expected);
    }
}
