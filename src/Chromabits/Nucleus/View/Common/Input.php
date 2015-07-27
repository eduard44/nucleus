<?php

namespace Chromabits\Nucleus\View\Common;

use Chromabits\Nucleus\View\Interfaces\Renderable;
use Chromabits\Nucleus\View\Node;

/**
 * Class Input
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Chromabits\Nucleus\View\Common
 */
class Input extends Node
{
    /**
     * Construct an instance of a Button.
     *
     * @param string[] $attributes
     * @param string|Renderable|string[]|Renderable[] $content
     */
    public function __construct($attributes, $content = '')
    {
        parent::__construct('input', $attributes, $content);
    }
}
