<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use AntiPatterns\Multiton\Multiton;
use AntiPatterns\Multiton\FirstSingleton;
use AntiPatterns\Multiton\SecondSingleton;


/**
 * Class MultitonTest
 */
class MultitonTest extends PHPUnit_Framework_TestCase
{

    protected function setUp(): void
    {

    }

    public function testInstances()
    {
        $this->assertInstanceOf(Multiton::class, FirstSingleton::getInstance());
        $this->assertInstanceOf(Multiton::class, SecondSingleton::getInstance());
        $this->assertSame(FirstSingleton::getInstance(), FirstSingleton::getInstance());
        $this->assertSame(SecondSingleton::getInstance(), SecondSingleton::getInstance());
    }
}
