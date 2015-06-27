<?php

include_once('version.php');
include_once('db_config.php');

define('BFW_AUTHOR', 'Matija Belec');
define('BFW_AUTHOR_WEBSITE', 'matijabelec.com');
define('BFW_CREATION_DATE', '27 Jun 2015');


define('BFW_ROUTE_NOT_FOUND', -801);

define('BFW_CONTROLLER_NOT_FOUND', -1001);
define('BFW_CONTROLLER_RETURN_OK', -1401);
define('BFW_CONTROLLER_RETURN_ERR', -1404);


define('RET_OK', BFW_CONTROLLER_RETURN_OK);
define('RET_ERR', BFW_CONTROLLER_RETURN_ERR);

?>