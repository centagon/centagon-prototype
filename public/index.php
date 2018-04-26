<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

use Philo\Blade\Blade;

$views = __DIR__ . '/../resources/views';
$cache = __DIR__ . '/../storage/views';

$blade = new Blade($views, $cache);
$page  = isset($_GET['page']) ? 'pages.' . $_GET['page'] : 'index';

echo $blade->view()
    ->make($page)
    ->render();
