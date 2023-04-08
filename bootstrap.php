<?php

declare(strict_types = 1);

use Doctrine\Common\ClassLoader;
use Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/configs/path_constants.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$classLoader = new ClassLoader('doctrineextensions', __DIR__ . '/vendor/beberlei/doctrineextensions');
$classLoader->register();

return require CONFIG_PATH . '/container/container.php';
