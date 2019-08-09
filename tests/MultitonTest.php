<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace AntiPatterns\Multiton\Tests;

use AntiPatterns\Multiton\Multiton;
use AntiPatterns\Multiton\FirstSingleton;
use AntiPatterns\Multiton\SecondSingleton;
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
