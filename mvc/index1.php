<?php
require_once('function.php');
require_once('function1.php');
require_once('config1.php');
$view=ORG('Smarty/','Smarty',$viewconfig);
$controller = $_GET['controller'];
$method = $_GET['method'];
C($controller, $method);


?>