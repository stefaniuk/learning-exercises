<?php

return array(
    'modules' => array(
        'ZFTool',
        'ZF\Apigility\Admin',
        'ZF\Apigility\Doctrine\Admin',
    ),
    'module_listener_options' => array(
        'config_glob_paths' => array(realpath(__DIR__) . 'config/autoload/{,*.}{global,local}-development.php'),
        'config_cache_enabled' => false,
        'module_map_cache_enabled' => false,
    )
);
