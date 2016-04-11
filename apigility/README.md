```
$ vagrant up
$ vagrant ssh
$ make bash
$ php public/index.php orm:schema-tool:create
```

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
                },
                {
                    'field': 'id',
                    'where': 'or',
                    'type': 'gte',
                    'value': '1000'
                }
            ]
        },
        dataType: 'json'
    });
});
```
