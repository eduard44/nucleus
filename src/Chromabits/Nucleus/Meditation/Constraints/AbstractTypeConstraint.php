<?php

namespace Chromabits\Nucleus\Meditation\Constraints;

/**
 * Class AbstractTypeConstraint
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Chromabits\Nucleus\Meditation\Constraints
 */
abstract class AbstractTypeConstraint extends AbstractConstraint
{
    /**
     * Return whether the constraint is defined by an union of types.
     *
     * @return bool
     */
    public function isUnion()
    {
        return false;
    }

    /**
     * Get the description of the constraint.
     *
     * @return string
     */
    public function getDescription()
    {
        return vsprintf(
            'The value is expected to meet the type constraint: %s',
            [$this->toString()]
        );
    }
}
