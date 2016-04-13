<?php
return array(
    'router' => array(
        'routes' => array(
            'test.rest.doctrine.role' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/role[/:role_id]',
                    'defaults' => array(
                        'controller' => 'Test\\V1\\Rest\\Role\\Controller',
                    ),
                ),
            ),
            'test.rest.doctrine.user' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user[/:user_id]',
                    'defaults' => array(
                        'controller' => 'Test\\V1\\Rest\\User\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'test.rest.doctrine.user',
            1 => 'test.rest.doctrine.role',
        ),
    ),
    'zf-rest' => array(
        'Test\\V1\\Rest\\User\\Controller' => array(
            'listener' => 'Test\\V1\\Rest\\User\\UserResource',
            'route_name' => 'test.rest.doctrine.user',
            'route_identifier_name' => 'user_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'user',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Application\\Entity\\User',
            'collection_class' => 'Test\\V1\\Rest\\User\\UserCollection',
            'service_name' => 'User',
        ),
        'Test\\V1\\Rest\\Role\\Controller' => array(
            'listener' => 'Test\\V1\\Rest\\Role\\RoleResource',
            'route_name' => 'test.rest.doctrine.role',
            'route_identifier_name' => 'role_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'role',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Application\\Entity\\Role',
            'collection_class' => 'Test\\V1\\Rest\\Role\\RoleCollection',
            'service_name' => 'Role',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Test\\V1\\Rpc\\Auth\\Controller' => 'Json',
            'Test\\V1\\Rest\\User\\Controller' => 'Json',
            'Test\\V1\\Rest\\Role\\Controller' => 'Json',
        ),
        'accept-whitelist' => array(
            'Test\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/json',
                1 => 'application/vnd.test.v1+json',
                2 => 'application/hal+json',
            ),
            'Test\\V1\\Rest\\Role\\Controller' => array(
                0 => 'application/json',
                1 => 'application/vnd.test.v1+json',
                2 => 'application/hal+json',
            ),
        ),
        'content-type-whitelist' => array(
            'Test\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/json',
                1 => 'application/vnd.test.v1+json',
            ),
            'Test\\V1\\Rest\\Role\\Controller' => array(
                0 => 'application/json',
                1 => 'application/vnd.test.v1+json',
            ),
        ),
        'accept_whitelist' => array(
            'Test\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/json',
                1 => 'application/*+json',
            ),
            'Test\\V1\\Rest\\Role\\Controller' => array(
                0 => 'application/json',
                1 => 'application/*+json',
            ),
        ),
        'content_type_whitelist' => array(
            'Test\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/json',
            ),
            'Test\\V1\\Rest\\Role\\Controller' => array(
                0 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Application\\Entity\\User' => array(
                'route_identifier_name' => 'user_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'test.rest.doctrine.user',
                'hydrator' => 'Test\\V1\\Rest\\User\\UserHydrator',
            ),
            'Test\\V1\\Rest\\User\\UserCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'test.rest.doctrine.user',
                'is_collection' => true,
            ),
            'Application\\Entity\\Role' => array(
                'route_identifier_name' => 'role_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'test.rest.doctrine.role',
                'hydrator' => 'Test\\V1\\Rest\\Role\\RoleHydrator',
            ),
            'Test\\V1\\Rest\\Role\\RoleCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'test.rest.doctrine.role',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(
            'Test\\V1\\Rest\\User\\UserResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Test\\V1\\Rest\\User\\UserHydrator',
            ),
            'Test\\V1\\Rest\\Role\\RoleResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Test\\V1\\Rest\\Role\\RoleHydrator',
            ),
        ),
    ),
    'doctrine-hydrator' => array(
        'Test\\V1\\Rest\\User\\UserHydrator' => array(
            'entity_class' => 'Application\\Entity\\User',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'Test\\V1\\Rest\\Role\\RoleHydrator' => array(
            'entity_class' => 'Application\\Entity\\Role',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
    ),
    'zf-content-validation' => array(
    ),
    'input_filter_specs' => array(
    ),
    'controllers' => array(
        'factories' => array(
        ),
    ),
    'zf-rpc' => array(
    ),
);
