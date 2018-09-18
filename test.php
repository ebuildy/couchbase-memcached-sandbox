<?php

$memcache = new \Memcached();
$memcache->addServer('127.0.0.1', 11210);
//$memcache->addServer('127.0.0.1', 11212);
//$memcache->addServer('127.0.0.1', 11213);

$memcache->setOption(\Memcached::OPT_BINARY_PROTOCOL,true);
$memcache->setOption(\Memcached::OPT_COMPRESSION, true);
$memcache->setOption(\Memcached::OPT_SERIALIZER, \Memcached::SERIALIZER_IGBINARY);

$data = file_get_contents("./data.txt");

for ($i = 0; $i < 10000; $i++) {
  $m = $memcache->set("test_" . $i, array("type" => "a", "i" => $i, "token" => md5($i), "lorem" => "sdjhkjsd hksdjhkjsdhf kljsqdhfkjlsqdhfkjlqdshf kjlqsdhfkljqsfpuzrhfiuzhckjlqdshckjqsldhckjqsdh ckjqsdhc qsdhc kljsqdh ckjlsqdhc lkjqsdhc kjlqsdhc lqhspiu qzhc iuqsck ljqdhsckj lqdh kjcqdsiuchqdsiuchqdskchd"), 60);

  //$memcache->set("test_" . $i, $data);
}

for ($i = 0; $i < 5; $i++)
{
  $t = $memcache->get("test_0");
var_dump($t);
  //var_dump(strlen($t));
}

//var_dump($memcache->get("toto"));
