<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$database_config = require_once 'config/database.php';

$capsule = new Capsule;

$capsule->addConnection($database_config);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();