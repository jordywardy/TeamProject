<?php
session_start();
/**
 * @author Luca
 * @abstract setting up relationships between M-V-C components 
 */
include_once ("models/model.php");
include ("controllers/controller.php");
include ("views/view.php");
include ("conf/config.inc.php");

$action = "";
if (! empty ( $_REQUEST ['action'] ))
	$action = $_REQUEST ['action'];

$model = new Model ();
$controller = new Controller ( $model, $action );
$view = new View ( $controller, $model );

// note: there is no need to echo the output (echos are within the template)
$view->getHTMLOutput ();
?>