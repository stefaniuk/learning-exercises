<?php

namespace LearningExercises\ZendDi\Hierarchy;

class Top
{
    /** @var  SimpleInterface */
    private $value;

    /**
     * @param SimpleInterface $value
     */
    public function __construct(SimpleInterface $value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
