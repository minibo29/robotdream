<?php

namespace Tests\FirstLesson;

use PHPUnit\Framework\TestCase;
use Src\FirstLesson\One;

class OneTest extends TestCase
{
    private One $one;

    protected function setUp(): void
    {
        $this->one = new One();
    }

    public function testInstanceCreation(): void
    {
        $this->assertInstanceOf(One::class, $this->one);
    }

    public function testActionReturnsExpectedString(): void
    {
        $result = $this->one->testAction();

        $this->assertSame('test one', $result);
    }

    public function testActionReturnsString(): void
    {
        $result = $this->one->testAction();

        $this->assertIsString($result);
    }
}
