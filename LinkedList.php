<?php

class Node {
	/* Link to next node */
	public $next;
	public $val;

	/* Node constructor */
	function __construct($next, $val)
	{
		$this->next = $next;
		$this->val = $val;
	}
}

class LinkedList {
	public $count = 0;
	public $list;

	public function append($value=''){
		$this->count++;

		if (is_object($this->list )) {
			$this->list = new Node($this->list, $value);
		}
		else {
			$firstNode = $this->list = new Node($this, $value);
		}
	}

	function get($index) {
		$cur = $this->list;
		for ($i=0;$i<$index;$i++) {
			$cur = $cur->next;
		}
		return $cur->val;
	}
}

$l = new LinkedList();
$l->append(4);
$l->append(5);
$l->append(6);
$i =0;
while ($i <= 10) {
	$l->append($i);
	$i++;
}
var_dump($l->get(3));
it's work!!!