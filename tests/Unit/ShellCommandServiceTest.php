<?php

declare(strict_types=1);

namespace Deepvibe\ShellCommandsPipeline\Tests\Unit;

use Deepvibe\ShellCommandsPipeline\ShellCommandInterface;
use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

/**
 * Class ShellCommandServiceTest
 * @package Deepvibe\ShellCommandsPipeline\Tests\Unit
 * @author  Yurii Oblovatskyi yuriyobl@gmail.com>
 */
class ShellCommandServiceTest  extends TestCase
{
    use ProphecyTrait;

    public function testOne()
    {
        $mock = $this->prophesize(ShellCommandInterface::class)->reveal();

        self::assertTrue(true);
    }
}
