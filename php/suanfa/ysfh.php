<?php
/**
 * File Name:ysfh.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

class Node{

	public $id;
	public $value;
	public $next;

	public function __construct($id,$value){
		$this->id = $id;
		$this->value = $value;
		$this->next = null;
	}
}

class SingeLinkList
{
	private $header;

	public function __construct(Node $node){
		$this->header = $node;
	}

	public function addNode(Node $node){
		$current = $this->header;
		while ($current->next != null){
			$current = $current->next;
		}

		$node->next = null;
		$current->next = $node;
	}
	//创建一个约瑟夫环
	public function createYSFH(){
		$first = $this->header;
		$current = $this->header;
		while ($current->next != null){
			$current = $current->next;
		}
		$current->next = $first;
	}

	public function eachList(){
		$current = $this->header;
		//var_dump($current);
		while ($current->next!=null && $current->next->id > $current->id){
			echo "id:{$current->id} value:{$current->value}\n";
			$current = $current->next;
		}
		echo "id:{$current->id} value:{$current->value}\n";
	}

	public function result($num){
		$current = $this->header;
		$tmpNum = 1;
		
		while ($current->id != $current->next->id){
			$tmpNum++;
			if ($tmpNum > $num-1){
				$tmpNum = 1;
				$current->next = $current->next->next; 
			}
			$current = $current->next;
		}

		$current->next = null;
		$this->header = $current;
	}

}

$list = new SingeLinkList(new Node(1,'aa'));
$list->addNode(new Node(2,'bb'));
$list->addNode(new Node(3,'cc'));
$list->addNode(new Node(4,'dd'));
$list->createYSFH();
$list->result(4);
$list->eachList();
