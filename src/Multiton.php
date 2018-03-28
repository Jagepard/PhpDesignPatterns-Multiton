<?php
/**
 * Date: 28.03.18
 * Time: 17:17
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace AntiPatterns\Multiton;


class Multiton
{

    /**
     * @var array
     */
    protected static $instances = [];

    /**
     * @return Multiton
     */
    public static function getInstance(): self
    {
        $that = get_called_class();

        if (!array_key_exists($that, self::$instances)){
            self::$instances[$that] = new self;
        }

        return self::$instances[$that];
    }

    public function __construct()
    {
    }

    /**
     * @codeCoverageIgnore
     */
    public function __sleep()
    {
    }

    /**
     * @codeCoverageIgnore
     */
    public function __wakeup()
    {
    }

    /**
     * @codeCoverageIgnore
     */
    public function __clone()
    {
    }
}