<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace AntiPatterns\Multiton;

class Multiton
{
    protected static array $instances = [];

    /**
     * Gets an object instance
     * --------------------------
     * Получает экземпляр объекта
     *
     * @return self
     */
    public static function getInstance(): self
    {
        $that = get_called_class();

        if (!array_key_exists($that, static::$instances)){
            static::$instances[$that] = new static();
        }

        return static::$instances[$that];
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
