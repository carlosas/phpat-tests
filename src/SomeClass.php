<?php

namespace SomeNamespace;

use WebMozart\Assert\Assert;

class SomeClass
{
    private $someProperty = 'someValue';

    public function someMethod(): string
    {
        Assert::that($this->someProperty)->isEqualTo('someValue');

        return 'someMethod';
    }
}
