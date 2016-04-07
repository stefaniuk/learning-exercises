<?php

require_once __DIR__.'/../vendor/autoload.php';

$sentinel1 = new PSRedis\Client('sentinel1', '6379');
$sentinel2 = new PSRedis\Client('sentinel2', '6379');
$sentinel3 = new PSRedis\Client('sentinel3', '6379');

$masterDiscovery = new PSRedis\MasterDiscovery('mymaster');
$masterDiscovery->addSentinel($sentinel1);
$masterDiscovery->addSentinel($sentinel2);
$masterDiscovery->addSentinel($sentinel3);

$master = $masterDiscovery->getMaster();
$ip = $master->getIpAddress();
$port = $master->getPort();


print_r(array($ip,$port));

$redis = new Redis();
$redis->connect($ip, $port);

$cacheDriver = new Doctrine\Common\Cache\RedisCache();
$cacheDriver->setRedis($redis);
$cacheDriver->save('hello', 'world');
