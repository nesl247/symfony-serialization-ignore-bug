<?php

namespace App;

class TestMessage extends BaseTestMessage
{
    use TestTrait;

    public function __construct(private string $testProperty3)
    {
    }

    public function getTestProperty3(): string
    {
        return $this->testProperty3;
    }
}
