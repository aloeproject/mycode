<?php
 /* File Name: empty.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年01月09日 星期五 00时32分10秒
 */
var_dump(empty(''));
echo "var_dump(empty(''))\n";
var_dump(empty(0));
echo "var_dump(empty(0))\n";
var_dump(empty('0'));
echo "var_dump(empty('0'))\n";
var_dump(empty('null'));
echo "var_dump(empty('null'))\n";
var_dump(empty(false));
echo "var_dump(empty(false))\n";

var_dump(false==null);
echo "var_dump(false==null)\n";
var_dump(false===null);
echo "var_dump(false===null)\n";
var_dump(false=='');
echo "var_dump(false=='')\n";
var_dump(false==0);
echo "var_dump(false==0)\n";
var_dump(false=='0');
echo "var_dump(false=='0')\n";
