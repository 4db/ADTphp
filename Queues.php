<?php

/**
 *If you’ve ever been in a line at the supermarket checkout, 
 *then you’ll know that the first person in line gets served first.
 *
 *In computer terminology, a queue is another abstract data type,
 *which operates on a first in first out basis, or FIFO.
 *
 *init – create the queue.
 *enqueue – add an item to the “end” (tail) of the queue.
 *dequeue – remove an item from the “front” (head) of the queue.
 *isEmpty – return whether the queue contains no more items.
*/

class Queues {

	public $queue;

	function init() {
		$this->queue = array();
	}

	function enqueue($item) {
		$this->queue[] = $item;
	}

	function desqueue() {
		if ($this->isEmpty()) {
			throw new Exception('Queues is empty!');
		}
		return array_shift($this->queue);
	}

	/**
	 * @return bool
	 */
	public function isEmpty() {
		return empty($this->queue);
	}

}

$q = new Queues();
$q->init();
$q->enqueue(120);
$q->enqueue(121);
$q->enqueue(122);
$q->enqueue(124);
$q->desqueue();
var_dump($q->queue);