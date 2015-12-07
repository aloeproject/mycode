<?php
/**
 * File Name:lb.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

class Node
{
	public $next = null;
	public $value = null;
	public function __construct($val) {
		$this->value = $val;
	}
}

class SingeLinkList
{
	private $header = null;
	private $length = null;
	public function __construct(){
	}


	public function length(){
		if(isset($this->length)){
			return $this->length;
		}
		if (!isset($this->header)) {
			return 0;
		}
		$i = 1;
		$current = $this->header;
		while ($current->next!=null){
			$current = $current->next;
			$i++;
		}
		return $i;
	}

	public function addNode(Node $node){
		if ($this->header == null) {
			$this->header = $node;
		} else {
			$current = $this->header;
			while ($current->next!== null) {
				$current =  $current->next;
			}
			$current->next = $node;
		}
	}

	public function eachNode(){
		$current = $this->header;
		while ($current->next != null){
			echo "{$current->value}\t";
			$current = $current->next;
		}
		echo $current->value;
	}

}

$node = new SingeLinkList();
$node->addNode(new Node(5));
$node->addNode(new Node(2));
$node->addNode(new Node(7));
$node->addNode(new Node(4));
$node->addNode(new Node(0));
$node->addNode(new Node(1));
$node->addNode(new Node(6));
$node->addNode(new Node(4));
$node->addNode(new Node(9));

$node->eachNode();
