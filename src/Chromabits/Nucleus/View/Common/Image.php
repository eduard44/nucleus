<?php

namespace Chromabits\Nucleus\View\Common;

use Chromabits\Nucleus\View\Interfaces\Renderable;
use Chromabits\Nucleus\View\Node;

/**
 * Class Image
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Chromabits\Nucleus\View\Common
 */
class Image extends Node
{
    /**
     * Construct an instance of a Button.
     *
     * @param string[] $attributes
     * @param string|Renderable|string[]|Renderable[] $content
     */
    public function __construct($attributes, $content = '')
    {
        parent::__construct('img', $attributes, $content);
    }
}
