<?php
/**
 *
 */
class BinaryNode
{
	/**
	 * Contains the node item
	 * @var
	 */
	public $value;
	/**
	 * The left child BinaryNode
	 * @var
	 */
	public $left;

	/**
	 * The right child BinaryNode
	 * @var
	 */
	public $right;


	/**
	 * @param $item
	 */
	public function __construct($item) {
		$this->value = $item;
		// new nodes are leaf nodes
		$this->left = null;
		$this->right = null;
	}

	/**
	 * perform an in-order traversal of the current node
	 * @return
	 */
	public function dump() {
		if ($this->left !== null) {
			$this->left->dump();
		}
		var_dump($this->value);
		if ($this->right !== null) {
			$this->right->dump();
		}
	}
}

/**
 *
 */
class BinaryTree
{
	protected $root; // the root node of our tree

	public function __construct() {
		$this->root = null;
	}

	public function isEmpty() {
		return $this->root === null;
	}

	public function insert($item) {
		$node = new BinaryNode($item);
		if ($this->isEmpty()) {
			// special case if tree is empty
			$this->root = $node;
		}
		else {
			// insert the node somewhere in the tree starting at the root
			$this->insertNode($node, $this->root);
		}
	}

	/**
	 * 1. If the tree is empty, insert new_node as the root node (obviously!)
	 * 2. while (tree is NOT empty):
	 * 2a. If (current_node is empty), insert it here and stop;
	 * 2b. Else if (new_node > current_node), try inserting the right of this node (and repeat Step 2)
	 * 2c. Else if (new_node < current_node), try inserting to the left of this node (and repeat Step 2)
	 * 2d. Else value is already in the tree
	 *
	 * @param  [type] $node    [description]
	 * @param  [type] $subtree [description]
	 * @return [type]          [description]
	 */
	protected function insertNode($node, &$subtree) {
		if ($subtree === null) {
			// insert node here if subtree is empty
			$subtree = $node;
		}
		else {
			if ($node->value > $subtree->value) {
				// keep trying to insert right
				$this->insertNode($node, $subtree->right);
			}
			else if ($node->value < $subtree->value) {
				// keep trying to insert left
				$this->insertNode($node, $subtree->left);
			}
			else {
				// reject duplicates
			}
		}
	}

	public function traverse() {
		// dump the tree rooted at "root"
		$this->root->dump();
	}
}