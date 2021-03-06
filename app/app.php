<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$database_config = require_once 'config/database.php';

$capsule = new Capsule;

$capsule->addConnection($database_config);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'complaints';
$ajax = isset($_REQUEST['ajax']) ? true : false;

if(!$ajax) {
	require_once dirname(__FILE__) . '/Views/layouts/partials/header.php';

	require_once dirname(__FILE__) . '/Controllers/'. $page . '.php';
	require_once dirname(__FILE__) . '/Views/'. $page . '/index.php';

	require_once dirname(__FILE__) . '/Views/layouts/partials/footer.php';	
} else {
	require_once dirname(__FILE__) . '/Controllers/'. $page . '.php';
}

