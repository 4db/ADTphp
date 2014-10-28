<?php

/**
 * In common usage, a stack is a pile of objects which are typically arranged in layers
 * This property is commonly referred to as last in first out, or LIFO
 * for example:
 *  - ammo to m4a1
 *  - battery for flash
 */

/**
 * Class Stack with The basic operations which define a stack are:
 * -init
 * -push
 * -pop
 * -top
 * -isEmpty
 */
class Stack {
	/**
	 * @var array Stack
	 */
	protected $list;
	protected $limit = 10;

	/**
	 * Create the stack
	 * @return object Stack
	 */
	function init() {
		$this->list = array();
	}

	/**
	 * Add an item to the top of the stack
	 * @param $item
	 */
	function push($item) {
		if (count($this->list) < $this->limit) {
			array_unshift($this->list, $item);
		}
		else {
			throw new Exception('Stack is full!');
		}
	}

	/**
	 * Remove the last item added to the top of the stack
	 * @return mixed
	 */
	function pop(){
		if ($this->isEmpty()) {
			throw new Exception('Stack is underflow(empty)!');
		}
		return array_shift($this->stack);
	}

	/**
	 * Look at the item on the top of the stack without removing it
	 * @return mixed
	 */
	public function top() {
		return current($this->list);
	}

	/**
	 * Return whether the stack contains no more items.
	 * @return bool
	 */
	public function isEmpty() {
		return empty($this->list);
	}
}