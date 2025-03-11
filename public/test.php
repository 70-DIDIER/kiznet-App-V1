<?php
require __DIR__.'/../vendor/autoload.php';
use App\Kernel;

$kernel = new Kernel('prod', false);
$kernel->boot();
echo "Symfony OK!<br>";

try {
    $db = new SQLite3(__DIR__.'/../var/data.db');
    echo "SQLite connecté!";
} catch(Exception $e) {
    echo "ERREUR DB: " . $e->getMessage();
}