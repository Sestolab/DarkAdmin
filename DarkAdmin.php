<?php

defined('is_running') or die('Not an entry point...');


class DarkAdmin{
	static function GetHead(){
		if (\gp\tool::LoggedIn()){
			\gp\tool\Plugins::css('DarkAdmin.css', false);
		}
	}
}

?>

