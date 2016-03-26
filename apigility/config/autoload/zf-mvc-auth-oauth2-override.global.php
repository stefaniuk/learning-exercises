<?php

return array(
    'service_manager' => array(
        'factories' => array(
            'ZF\OAuth2\Service\OAuth2Server' => 'ZF\MvcAuth\Factory\NamedOAuth2ServerFactory',
        ),
    ),
);
