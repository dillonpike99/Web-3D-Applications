<?php

require "view/load.php";
require "model/model.php";
require "controller/controller.php";

$pageURI = $_SERVER["REQUEST_URI"];
$pageURI = substr($pageURI, strrpos($pageURI, "index.php") + 10);

if(strlen($pageURI) == 0) {
	header("Location: /~dp396/3dapp/assignment/index.php/home");
	new Controller("home");
} elseif($pageURI == "home") {
	new Controller("home");
} elseif($pageURI == "drinks" || substr($pageURI, 0, 7) == "drinks?") {
	new Controller("drinks");
} elseif($pageURI == "builddb") {
	new Controller("builddb");
} else {
	new Controller("notfound");
}

?>