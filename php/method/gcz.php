<?php
/**
 * File Name:gcz.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/


class Subject implements SplSubject  
{  
	private $observers;  

	public function __construct(){
		$this->observers = new SplObjectStorage();
	}
	//添加观察者
	public function attach(SplObserver $observer)  
	{  
		$this->observers->attach($observer);
	}  

	//删除观察者
	public function detach(SplObserver $observer)  
	{  
		$this->observers->detach($observer);
	}  

	public function post()  
	{  
		//post相关code  
		$this->notify();  
	}  

	public function notify()  
	{  
		foreach ($this->observers as $observer) {  
			$observer->update($this);  
		}  
	}  

	public function setCount($count)  
	{  
		echo "数据量加" . $count."\n";  
	}  

	public function setIntegral($integral)  
	{  
		echo "积分量加" . $integral."\n";  
	}  

}  

class Observer1 implements SplObserver
{  
	//观察者 Observer1 需要执行的操作
	public function update(SplSubject $subject)  
	{  
		$subject-> setCount(1);  
	}  
}  
class Observer2 implements SplObserver 
{  
	//观察者 Observer2 需要执行的操作
	public function update(SplSubject $subject)  
	{  
		$subject-> setIntegral(10);  
	}  
}  


class Client  
{  
	public static function test()  
	{  
		$subject = new Subject();  
		//观察者a
		$a = new Observer1();
		//观察者b
		$b = new Observer1();
		$subject->attach($a);  
		$subject->attach($b);  
		//删除观察者b
		$subject->detach($b);  
		$subject->post();//输出：数据量加1 积分量加10  
	}  
}  

Client::test();
