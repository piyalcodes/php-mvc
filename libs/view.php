<?php
class View {
	function __construct() {
		echo 'inside common view  <br>';
	}		
	public function render($name) {
		require $name.'.php';
	}
}
?>