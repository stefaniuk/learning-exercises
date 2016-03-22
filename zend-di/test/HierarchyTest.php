<?php

namespace LearningExercisesTest\ZendDi;

use LearningExercises\ZendDi\Hierarchy\ClassA;
use LearningExercises\ZendDi\Hierarchy\ClassB;
use LearningExercises\ZendDi\Hierarchy\Top;
use PHPUnit_Framework_TestCase;
use Zend\Di\Di;

class HierarchyTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $di = new Di;
        $di->instanceManager()->setParameters('LearningExercises\ZendDi\Hierarchy\Top', array(
            'value' => new ClassB(),
        ));
        /** @var Top */
        $top = $di->get('LearningExercises\ZendDi\Hierarchy\Top');

        $this->assertTrue($top->getValue() instanceof ClassA);
    }
}
