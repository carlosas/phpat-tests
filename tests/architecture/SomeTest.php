<?php

namespace SomeNamespace\Tests\Architecture;

use PhpAT\Rule\Rule;
use PhpAT\Selector\Selector;
use PhpAT\Test\ArchitectureTest;
use SomeNamespace\SomeClass;

class SomeTest extends ArchitectureTest
{
    public function test_with_asterisk(): Rule
    {
        return $this->newRule
            ->classesThat(Selector::haveClassName(SomeClass::class))
            ->mustNotDependOn()
            ->classesThat(Selector::haveClassName('WebMozart\Assert\*'))
            ->build();
    }

    public function test_with_fqcn(): Rule
    {
        return $this->newRule
            ->classesThat(Selector::haveClassName(SomeClass::class))
            ->mustNotDependOn()
            ->classesThat(Selector::haveClassName('WebMozart\Assert\Assert'))
            ->build();
    }
}
