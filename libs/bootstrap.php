<?php
class Bootstrap {
	function __construct() {
		$url = $_GET['url'];	 	
		require 'controllers/'.$url.'.php';
		$controller = new $url;	
	}
}
?>