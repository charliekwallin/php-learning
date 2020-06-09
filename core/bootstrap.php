<?php
// returns the array $config
$config = require 'config.php';

require 'core/Router.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

// $pdo = Connection::make();
//$query = new QueryBuilder($pdo);
// can also get rid of the $pdo 
//$query = new QueryBuilder(Connection::make());

// Then this line can become explicit and we can just return it
// When we do this we need the bootstrap to hold the returned value.
return new QueryBuilder(Connection::make($config['database']));