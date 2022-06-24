<?php

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory = (new Factory)->withServiceAccount('mitra-4b7a6-firebase-adminsdk-n6e07-008f2ff4d5.json')
    ->withDatabaseUri('https://mitra-4b7a6-default-rtdb.asia-southeast1.firebasedatabase.app/');

    $database = $factory->createDatabase();
    $auth = $factory->createAuth();
    $storage = $factory->createStorage();
?>