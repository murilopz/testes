<?php

$url = 'http://169.254.169.254/latest/meta-data/instance-id';

$instance = file_get_contents($url);

echo '<p>Versao Github 2';

echo '<p>Instancia '.$instance;

echo '<p>Remote Addr: '.$_SERVER['REMOTE_ADDR'];

echo '<p>Server Addr: '.$_SERVER['SERVER_ADDR'];

?>
