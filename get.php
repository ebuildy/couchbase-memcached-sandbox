<?php

$memcache = new \Memcached();
$memcache->addServer('127.0.0.1', $argv[1]);

//$memcache->setOption(\Memcached::OPT_BINARY_PROTOCOL,true);
//$memcache->setOption(\Memcached::OPT_COMPRESSION, true);
//$memcache->setOption(\Memcached::OPT_SERIALIZER, \Memcached::SERIALIZER_IGBINARY);
/*$memcache->setOption(\Memcached::OPT_HASH, \Memcached::HASH_MD5);
$memcache->setOption(\Memcached::OPT_DISTRIBUTION, \Memcached::DISTRIBUTION_CONSISTENT);
*/
$t = $memcache->get($argv[2]);

var_dump($t);
