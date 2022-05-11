<?php

$url = 'http://169.254.169.254/latest/meta-data/instance-id';

$instance = file_get_contents($url);

echo '<p>Versao Github 9xxxx';

echo '<p>Instancia '.$instance;

echo '<p>Remote Addr: '.$_SERVER['REMOTE_ADDR'];

echo '<p>Server Addr: '.$_SERVER['SERVER_ADDR'];

echo '<p> outras ';


echo '<p>env 1: '.getenv('DOTH_var1');

echo '<p>env 2: '.getenv('DOTH_var2');

echo '<p>HTTP_X_FORWARDED_FOR: '.getenv('HTTP_X_FORWARDED_FOR');

//print_r($_ENV);

echo '<p>printr';

print_r($_SERVER);

?>
