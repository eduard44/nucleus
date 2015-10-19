<?php

namespace Chromabits\Nucleus\Control\Interfaces;

use Closure;

/**
 * Interface ChainInterface
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Chromabits\Nucleus\Control\Interfaces
 */
interface ChainInterface extends ApplyInterface
{
    /**
     * @param Closure $closure
     *
     * @return ChainInterface
     */
    public function bind(Closure $closure);
}