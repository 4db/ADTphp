<?php

require_once 'LinkedList.php';

/**
 * Class Stack
 */
class LinkedListTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test work LinkedList
	 */
	public function testLinkedList1(){
			$l = new LinkedList();
			$i =0;
			while ($i <= 55) {
				$l->append($i);
				$i++;
			}
			$this->assertEquals(34, $l->get(34));
	}

	/**
	 * Test LinkedList Count
	 */
	public function testLinkedList2(){
		$l = new LinkedList();
		$i =0;
		while ($i <= 10) {
			$l->append($i);
			$i++;
		}
		$this->assertEquals(10, $l->count);
	}

	/**
	 * Test default PHP array memory size
	 */
	public function testLinkedListMemoryInDefaultArray(){
		$n = 10000;
		$a = array();
		for ($i = 0; $i < $n; $i++) {
			$a[$i] = new Node(null, $i);
			//array_push($a, new Item(null, $i));
		}
		echo "\nMemory size in php array() x $n = " . $this->convert(memory_get_usage(true));
	}

	/**
	 * Test LinkedList Memory size
	 */
	public function testLinkedListMemory(){
		$l = new LinkedList();
		$i = 0;
		while ($i <= 9999) {
			$l->append($i);
			$i++;
		}
		echo "\nMemory size in LinkedList x $i = " . $this->convert(memory_get_usage(true));
	}

	public function convert($size)
	{
		$unit=array('b','kb','mb','gb','tb','pb');
		return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
	}
}