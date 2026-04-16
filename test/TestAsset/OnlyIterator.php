<?php
/**
 * Sandro Keil (https://sandro-keil.de)
 *
 * @link      http://github.com/sandrokeil/interop-config for the canonical source repository
 * @copyright Copyright (c) 2015-2020 Sandro Keil
 * @license   http://github.com/sandrokeil/interop-config/blob/master/LICENSE.md New BSD License
 */

namespace InteropTest\Config\TestAsset;


class OnlyIterator implements \Iterator
{
    /**
     * data
     *
     * @var array
     */
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function current(): mixed
    {
        return current($this->data);
    }

    public function next(): void
    {
        next($this->data);
    }

    public function key(): mixed
    {
        return key($this->data);
    }

    public function valid(): bool
    {
        return current($this->data) !== false;
    }

    public function rewind(): void
    {
        reset($this->data);
    }

}
