```
$ vagrant up
$ vagrant ssh
$ make bash
$ php public/index.php orm:schema-tool:create
```
            'strategies' => array(
                'roles' => 'ZF\\Apigility\\Doctrine\\Server\\Hydrator\\Strategy\\CollectionExtract',
            ),

    'zf-hal' => array(
        'metadata_map' => array(
            'Application\\Entity\\User' => array(
                'route_identifier_name' => 'user_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'test.rest.doctrine.user',
                'hydrator' => 'Test\\V1\\Rest\\User\\UserHydrator',
                'max_depth' => 2,
            ),


    -H 'Cookie: XDEBUG_SESSION=xdebug' \

curl 'https://localhost:8443/apigility/api/module/Test/doctrine/User' -k -sSL \
    -H 'Accept: application/json' \
    -H 'Content-Type: application/json' \
    --data '{"object_manager":"doctrine.entitymanager.orm_default","entity_class":"Application\\Entity\\User","service_name":"User"}'

curl 'https://localhost:8443/role' -k -sSL --request POST \
    -H 'Accept: application/json' \
    -H 'Content-Type: application/json' \
    --data '{"name":"roleX"}' \
    | json | pygmentize -l json

curl 'https://localhost:8443/user' -k -sSL --request POST \
    -H 'Accept: application/json' \
    -H 'Content-Type: application/json' \
    --data '{"username":"user","password":"password"}' \
    | json | pygmentize -l json

curl 'https://localhost:8443/user/1' -k -sSL --request PATCH \
    -H 'Accept: application/json' \
    -H 'Content-Type: application/json' \
    --data '{"password":"******"}' \
    | json | pygmentize -l json

curl 'https://localhost:8443/user/1' -k -sSL --request DELETE \
    -H 'Accept: application/json' \
    -H 'Content-Type: application/json' \
    | json | pygmentize -l json

curl 'https://localhost:8443/user/1' -k -sSL --request PATCH \
    -H 'Accept: application/json' \
    -H 'Content-Type: application/json' \
    --data '{"roles":[{"id":1}]}' \
    | json | pygmentize -l json





curl -X PATCH 'https://localhost:8443/user/1' -k -sSL \
    -H 'Accept: application/json' \
    -H 'Content-Type: application/json' \
    --data '{"roles":[{"id":2},{"id":3}]}' \
    | json | pygmentize -l json

curl 'https://localhost:8443/user/1' -k -sSL \
    -H 'Accept: application/json' \
    -H 'Content-Type: application/json' \
    | json | pygmentize -l json

```
$.ajax({
    url: 'https://localhost:8443/user',
    type: 'GET',
    data: {
        'filter': [
            {
                'field': 'roles',
                'type': 'ismemberof',
                'value': '3'
            }
        ]
    },
    dataType: 'json'
});
```
