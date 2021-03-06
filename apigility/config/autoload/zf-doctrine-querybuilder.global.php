<?php

return array(
    'zf-doctrine-querybuilder-options' => array(
        'filter_key' => 'filter',
        'order_by_key' => 'order-by',
    ),
    'zf-doctrine-querybuilder-orderby-orm' => array(
        'invokables' => array(
            'field' => 'ZF\Doctrine\QueryBuilder\OrderBy\ORM\Field',
        ),
    ),
    'zf-doctrine-querybuilder-orderby-odm' => array(
        'invokables' => array(
            'field' => 'ZF\Doctrine\QueryBuilder\OrderBy\ODM\Field',
        ),
    ),
    'zf-doctrine-querybuilder-filter-orm' => array(
        'invokables' => array(
            'eq' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\Equals',
            'neq' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\NotEquals',
            'lt' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\LessThan',
            'lte' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\LessThanOrEquals',
            'gt' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\GreaterThan',
            'gte' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\GreaterThanOrEquals',
            'isnull' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\IsNull',
            'isnotnull' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\IsNotNull',
            'in' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\In',
            'notin' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\NotIn',
            'between' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\Between',
            'like' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\Like',
            'notlike' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\NotLike',
            'ismemberof' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\IsMemberOf',
            'orx' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\OrX',
            'andx' => 'ZF\Doctrine\QueryBuilder\Filter\ORM\AndX',
        ),
    ),
    'zf-doctrine-querybuilder-filter-odm' => array(
        'invokables' => array(
            'eq' => 'ZF\Doctrine\QueryBuilder\Filter\ODM\Equals',
            'neq' => 'ZF\Doctrine\QueryBuilder\Filter\ODM\NotEquals',
            'lt' => 'ZF\Doctrine\QueryBuilder\Filter\ODM\LessThan',
            'lte' => 'ZF\Doctrine\QueryBuilder\Filter\ODM\LessThanOrEquals',
            'gt' => 'ZF\Doctrine\QueryBuilder\Filter\ODM\GreaterThan',
            'gte' => 'ZF\Doctrine\QueryBuilder\Filter\ODM\GreaterThanOrEquals',
            'isnull' => 'ZF\Doctrine\QueryBuilder\Filter\ODM\IsNull',
            'isnotnull' => 'ZF\Doctrine\QueryBuilder\Filter\ODM\IsNotNull',
            'in' => 'ZF\Doctrine\QueryBuilder\Filter\ODM\In',
            'notin' => 'ZF\Doctrine\QueryBuilder\Filter\ODM\NotIn',
            'between' => 'ZF\Doctrine\QueryBuilder\Filter\ODM\Between',
            'like' => 'ZF\Doctrine\QueryBuilder\Filter\ODM\Like',
            'regex' => 'ZF\Doctrine\QueryBuilder\Filter\ODM\Regex',
        ),
    ),
    'zf-apigility-doctrine-query-provider' => array(
        'invokables' => array(
            'default_orm' => 'ZF\Doctrine\QueryBuilder\Query\Provider\DefaultOrm',
            'default_odm' => 'ZF\Doctrine\QueryBuilder\Query\Provider\DefaultOdm',
        )
    ),
);
