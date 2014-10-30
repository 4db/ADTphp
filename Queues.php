<?php

/**
 *If you-ve ever been in a line at the supermarket checkout, 
 *then you-ll know that the first person in line gets served first.
 *
 *In computer terminology, a queue is another abstract data type,
 *which operates on a first in first out basis, or FIFO.
 *
 *init - create the queue.
 *enqueue - add an item to the -end- (tail) of the queue.
 *dequeue - remove an item from the -front- (head) of the queue.
 *isEmpty - return whether the queue contains no more items.
*/

class Queues {

	/**
	 * @var array
	 */
	public $queue;

	function init() {
		$this->queue = array();
	}

	/**
	 * @param $item
	 */
	function enqueue($item) {
		$this->queue[] = $item;
	}

	/**
	 * @return mixed
	 * @throws Exception
	 */
	function desqueue() {
		if ($this->isEmpty()) {
			throw new Exception('Queues is empty!');
		}
		return array_shift($this->queue);
	}

	/**
	 * return whether the queue contains no more items.
	 * @return bool
	 */
	public function isEmpty() {
		return empty($this->queue);
	}

}