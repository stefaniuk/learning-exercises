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
            'test.rest.doctrine.user-role' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user-role[/:user_role_id]',
                    'defaults' => array(
                        'controller' => 'Test\\V1\\Rest\\UserRole\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'test.rest.doctrine.role',
            1 => 'test.rest.doctrine.user',
            2 => 'test.rest.doctrine.user-role',
        ),
    ),
    'zf-rest' => array(
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
        'Test\\V1\\Rest\\UserRole\\Controller' => array(
            'listener' => 'Test\\V1\\Rest\\UserRole\\UserRoleResource',
            'route_name' => 'test.rest.doctrine.user-role',
            'route_identifier_name' => 'user_role_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'user_role',
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
            'entity_class' => 'Application\\Entity\\UserRole',
            'collection_class' => 'Test\\V1\\Rest\\UserRole\\UserRoleCollection',
            'service_name' => 'UserRole',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Test\\V1\\Rest\\Role\\Controller' => 'HalJson',
            'Test\\V1\\Rest\\User\\Controller' => 'HalJson',
            'Test\\V1\\Rest\\UserRole\\Controller' => 'HalJson',
        ),
        'accept-whitelist' => array(
            'Test\\V1\\Rest\\Role\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Test\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Test\\V1\\Rest\\UserRole\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content-type-whitelist' => array(
            'Test\\V1\\Rest\\Role\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/json',
            ),
            'Test\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/json',
            ),
            'Test\\V1\\Rest\\UserRole\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/json',
            ),
        ),
        'accept_whitelist' => array(),
        'content_type_whitelist' => array(),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
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
            'Application\\Entity\\UserRole' => array(
                'route_identifier_name' => 'user_role_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'test.rest.doctrine.user-role',
                'hydrator' => 'Test\\V1\\Rest\\UserRole\\UserRoleHydrator',
                'max_depth' => 1,
            ),
            'Test\\V1\\Rest\\UserRole\\UserRoleCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'test.rest.doctrine.user-role',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(
            'Test\\V1\\Rest\\Role\\RoleResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Test\\V1\\Rest\\Role\\RoleHydrator',
            ),
            'Test\\V1\\Rest\\User\\UserResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Test\\V1\\Rest\\User\\UserHydrator',
            ),
            'Test\\V1\\Rest\\UserRole\\UserRoleResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Test\\V1\\Rest\\UserRole\\UserRoleHydrator',
            ),
        ),
    ),
    'doctrine-hydrator' => array(
        'Test\\V1\\Rest\\Role\\RoleHydrator' => array(
            'entity_class' => 'Application\\Entity\\Role',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'Test\\V1\\Rest\\User\\UserHydrator' => array(
            'entity_class' => 'Application\\Entity\\User',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(
                'roles' => 'ZF\\Apigility\\Doctrine\\Server\\Hydrator\\Strategy\\CollectionExtract',
            ),
            'use_generated_hydrator' => true,
        ),
        'Test\\V1\\Rest\\UserRole\\UserRoleHydrator' => array(
            'entity_class' => 'Application\\Entity\\UserRole',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
    ),
    'zf-content-validation' => array(
        'Test\\V1\\Rest\\User\\Controller' => array(
            'input_filter' => 'Test\\V1\\Rest\\User\\Validator',
        ),
        'Test\\V1\\Rest\\Role\\Controller' => array(
            'input_filter' => 'Test\\V1\\Rest\\Role\\Validator',
        ),
        'Test\\V1\\Rest\\UserRole\\Controller' => array(
            'input_filter' => 'Test\\V1\\Rest\\UserRole\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Test\\V1\\Rest\\Role\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'Test\\V1\\Rest\\User\\Validator' => array(
            0 => array(
                'name' => 'username',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'password',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
            2 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'roles',
            ),
        ),
        'Test\\V1\\Rest\\UserRole\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'user',
            ),
            1 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'role',
            ),
        ),
    ),
    'controllers' => array(
        'factories' => array(),
    ),
    'zf-rpc' => array(),
);
