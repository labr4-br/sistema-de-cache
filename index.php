<?php

include('cache.php');

$cache = new Cache();
echo $cache->readCache()->conteudo;

//var_dump($cache->readCache()->conteudo);





?>