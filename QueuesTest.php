<?php

require_once 'Queues.php';

/**
 * Class Stack
 */
class QueuesTest extends PHPUnit_Framework_TestCase {

	public function testQueues(){
		$q = new Queues();
		$q->init();
		$q->enqueue(120);
		$q->enqueue(121);
		$q->enqueue(122);
		$q->enqueue(124);
		$q->desqueue();
		$this->assertEquals(array(121,122,124), $q->queue);
	}

	public function testQueues2(){
		$q = new Queues();
		$q->init();
		$q->enqueue(null);
		$q->enqueue([]);
		$q->enqueue('string');
		$q->enqueue(1);
		$this->assertEquals(array(null,[],'string', 1), $q->queue);
	}
}