<?php
namespace ExampleComposer;

class Debug {
	public static function inspectEnvironmentVariables():void{
		echo "all environment variables:", PHP_EOL;
		foreach(getenv() as $key => $value) {
			echo "$key => $value", PHP_EOL;
		}

		echo PHP_EOL;
	}
}
