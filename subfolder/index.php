<?php

echo 'subfolder';

echo '<p>HTTP_X_FORWARDED_FOR: '.getenv('HTTP_X_FORWARDED_FOR');

echo '<p>';

//print_r($_ENV);

print_r($_SERVER);

?>
