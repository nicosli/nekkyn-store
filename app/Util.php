<?php
namespace App;
class Util{
	public static function menuActive($path, $mod, $class){
		return (preg_match('/'.$mod.'/i', $path))? $class : '';
	}
	public static function recortar($cadena, $largo){
		return substr($cadena, 0, $largo); 
	}
}
?>