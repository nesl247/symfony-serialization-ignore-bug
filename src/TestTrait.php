<?php

namespace App;

use Symfony\Component\Serializer\Annotation\Ignore;

trait TestTrait
{
    /**
     * Remove #[Ignore] and you will get no errors
     */
    #[Ignore]
    private string $testProperty1 = 'testProperty1';
}
