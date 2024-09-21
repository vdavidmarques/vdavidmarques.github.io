<?php

require 'vendor/autoload.php';

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);

$page = $_GET['page'] ?? 'home'; 

if ($page === 'en') {
    echo $blade->run('en');
} elseif($page ==='sobre') {
    echo $blade->run('sobre');
} elseif ($page === 'about') {
    echo $blade->run('about');
} elseif ($page === 'contact') {
    echo $blade->run('contact');
} elseif ($page === 'contato') {
    echo $blade->run('contato');
} else {
    echo $blade->run('home');
}