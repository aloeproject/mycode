<?php
 /* File Name: register_shutdow.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2014年12月31日 星期三 14时44分17秒
 */
register_shutdown_function('shutdown');
function shutdown(){
	var_dump(error_get_last());
}

