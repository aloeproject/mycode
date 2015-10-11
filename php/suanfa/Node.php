<?php
/**
 * File Name:Node.php
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

	public function getLinkLength(){
		$i = 1;
		$current = $this->header;
		while ($current->next !=null){
			$i++;
			$current = $current->next;
		}
		return $i;
	}

	public function eachList(){
		$current = $this->header;
		while ($current->next != null){
			echo "id:{$current->id} value:{$current->value}\n";
			$current = $current->next;
		}
		echo "id:{$current->id} value:{$current->value}\n";
	}

	public function delNode($id){
		$current = $this->header;
		while ($current->next !=null) {
			if ($current->next->id == $id) {
				$flag = true;
				break;
			}
			$current = $current->next;
		}
		if ($flag === true) {
			$current->next = $current->next->next;
		} else {
			echo "元素{$id}不存在\n";
		}
	}

}


$list = new SingeLinkList(new Node(1,'aa'));
$list->addNode(new Node(2,'bb'));
$list->addNode(new Node(3,'cc'));
$list->addNode(new Node(4,'dd'));
$length = $list->getLinkLength();
var_dump($length);
//$list->eachList();
$list->delNode(2);
//$list->delNode(2);
$list->eachList();
