<?php
/**
 * Created by PhpStorm.
 * User: SYSTEM
 * Date: 18-Jul-18
 * Time: 22:15
 */

require_once './vendor/autoload.php';
require_once 'Firestore.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/secret/developer-usa-acc-d7dc10c4d3cd.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

$database = $firebase->getDatabase();

//die(print_r($database));




$fs = new Firestore('categoryFood');


echo '<pre>';
print_r($fs->getDocument('H4Z5DhMK1OMiEDmxjCVH'));
