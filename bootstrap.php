<?php
/**
 * Created by PhpStorm.
 * User: andranik
 * Date: 1/8/21
 * Time: 1:59 AM
 */
require 'vendor/autoload.php';
require 'routes.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$config = Setup::createAnnotationMetadataConfiguration([__DIR__ . '/src/Entity'], false, null, null, false);
$entityManager = EntityManager::create(['url' => 'mysql://root:root@127.0.0.1/algorithm'], $config);
