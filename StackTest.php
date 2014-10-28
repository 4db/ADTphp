<?php

require_once 'Stack.php';

/**
 * Class Stack
 */
class StackTest extends PHPUnit_Framework_TestCase {

	public function testGetTop(){
		$stack = new Stack;
		$stack->init();
		$stack->push(1);
		$stack->push(2);
		$stack->push(3);
		$stack->push(4);
		$stack->push(5);
		$stack->push(6);

		$this->assertEquals(6, $stack->top());
	}

	/**
	 * @throws Exception
	 */
	public function testPop() {
		$stack = new Stack;
		$stack->init();
		$stack->push(10);
		$stack->push(2);
		$stack->push(33);
		$stack->push(4);
		$stack->push(45);
		$stack->push(0);
		$this->assertEquals(null,  $stack->top());
	}

	public function testIsEmpty()
	{
		$stack = new Stack;
		$stack->init();
		$stack->push(10);
		$stack->push(2);
		$stack->push(33);
		$stack->push(4);
		$stack->push(45);
		$stack->push(32);
		$stack->push(10);
		$stack->push(2);
		$stack->push(33);
		$stack->push(4);
		$this->assertEquals(null,  $stack->isEmpty());
	}
}