<?php
 /* File Name: q4m.class.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年01月05日 星期一 20时17分09秒
 */

class Q4m
{
	private $connect = null;

	function __construct(){
		$this->connect = mysqli_connect('localhost','root',123456,'q4m');
	}
	
	function add(){
		for ($i = 1;$i<=10;$i++) {
			$sql = "insert into my_queue(content) values ('".rand(1,10000)."')";
			$ret = mysqli_query($this->connect,$sql);
		}
	}

	
	function del(){}

	function update(){
	
	}

}

$q4m = new Q4m();
$q4m->add();
