<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace AntiPatterns\Multiton\Tests;

use AntiPatterns\Multiton\{Multiton, FirstSingleton, SecondSingleton};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class MultitonTest extends PHPUnit_Framework_TestCase
{
    public function testInstances()
    {
        $this->assertInstanceOf(Multiton::class, FirstSingleton::getInstance());
        $this->assertInstanceOf(Multiton::class, SecondSingleton::getInstance());
        $this->assertNotSame(FirstSingleton::getInstance(), SecondSingleton::getInstance());
    }
}
