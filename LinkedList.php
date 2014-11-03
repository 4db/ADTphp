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

	public $list = null;

	public $count = -1;//Id like in array

	public $_head = null;
	public $_tail = null;

	public function append($value=''){
		$this->count++;

		if ($this->list === null) {
			$this->_head = $this->list = new Node($this, $value);
		}
		else {
			$this->list = new Node($this->list, $value);
			$this->_tail = $value;
		}
	}

	public function get($index) {
		$count = $this->count;

		if ($count == -1) {
			return 0;//empty LinkedList
		}

		$cur = $this->list;
		while ($count != $index) {
			$cur = $cur->next;
			$count--;
		}
		return $cur->val;
	}
}