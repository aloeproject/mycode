<?php
/**
 * File Name:Subject.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
#观察者模式
#被观察
class Subject implements SplSubject
{
	public function __construct(){
		 $this->observers = new SplObjectStorage();
	}

	//添加观察者
	public function attach(SplObserver $observer){
		$this->observers->attach($observer);
	}
	//删除观察者
	public function detach(SplObserver $observer){
		$this->observers->detach($observer);
	}

	public function post(){
		$this->notify();
	}
	
	public function notify(){
		foreach ($this->observers as $observer){
			$observer->update($this);
		}
	}

	public function work1(){
		echo __METHOD__;
	}
}


class Observer1 implements SplObserver
{
	public function update(SplSubject $subject)
	{
		$subject->work1();
	}
}

$sject = new Subject();
$sject->attach(new Observer1());
$sject->post();
