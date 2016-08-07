<?php
class Model {
	function __construct() {		 
	}	
	
	public function loadQuery($name) {
		require $name.'.php';
	}
}
?>