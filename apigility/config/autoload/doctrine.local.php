<?php

return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOPgSql\Driver',
                'params' => array(
                    'host' => 'postgres',
                    'port' => 5432,
                    'dbname' => 'postgres',
                    'user' => 'postgres',
                    'password' => 'postgres',
                    'charset' => 'UTF8',
                ),
            ),
        ),
        'driver' => array(
            'default_annotation_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(
                    0 => APPLICATION_PATH . '/module/Application/src/Application/Entity',
                ),
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Application\Entity' => 'default_annotation_driver',
                )
            )
        )
    )
);
