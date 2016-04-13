```
$ vagrant up
$ vagrant ssh
$ make bash
$ php public/index.php orm:schema-tool:create
```


curl 'https://localhost:8443/apigility/api/module/Test/doctrine/User' -k \
    -H 'Accept: application/json' \
    -H 'Content-Type: application/json' \
    -H 'Cookie: XDEBUG_SESSION=xdebug' \
    --data '{"object_manager":"doctrine.entitymanager.orm_default","entity_class":"Application\\Entity\\User","service_name":"User"}'

curl 'https://localhost:8443/user/1' -k -sSL \
    -H 'Accept: application/json' \
    -H 'Content-Type: application/json' \
    -H 'Cookie: XDEBUG_SESSION=xdebug' \
    | json | pygmentize -l json

```
HTTP GET https://localhost:8443/user

$(function() {
    $.ajax({
        url: 'https://localhost:8443/user',
        type: 'GET',
        data: {
            'filter': [
                {
                    'field': 'id',
                    'where': 'or',
                    'type': 'between',
                    'from': '1',
                    'to': '100'
                }
            ]
        },
        dataType: 'json'
    });
});
```
