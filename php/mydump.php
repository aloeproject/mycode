<?php
/**
 * File Name:mydump.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

function mydump($var){
	$type = gettype($var);
	switch ($type){
	case 'boolean':
		if ($var){
			echo "boolean(true)";
		} else {
			echo 'boolean(false)';
		}
		break;
	case 'integer':
		echo "int({$var})";
		break;
	case 'double':
		echo "double({$var})";
		break;
	case 'string':
		echo 'string('.strlen($var).')'.$string;
		break;
	case 'array':
		if (is_array($var)) {
			echo 'array('.count($var)."){\n";
			foreach ($var as $k=>$item) {
				echo "{$k}=>";
				mydump($item);
			}
			echo "}\n";
		}
		break;
	case 'object':
		break;
	case 'resource':
		break;
	case 'NULL':
		echo "NULL";
		break;
	}
}
mydump(array('a'=>array(1)));
