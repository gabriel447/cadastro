<?php

date_default_timezone_set('America/Sao_Paulo');

$data = date('Y/m/d, H:i:s', time() + (60 * 10));

echo '<h1>' . $data . '</h1>';
