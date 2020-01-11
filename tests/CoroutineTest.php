<?php

namespace HuangYi\SwooleUnit\Tests;

use PHPUnit\Framework\TestCase;
use Swoole\Coroutine;

class CoroutineTest extends TestCase
{
    public function test_coroutine()
    {
        Coroutine::sleep(0.1);

        $this->assertTrue(true);
    }
}
