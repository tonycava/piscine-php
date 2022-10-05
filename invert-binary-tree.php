<?php

function invertTree(BinaryNode|null $tree): BinaryNode|null
{
    if ($tree == null) return null;
    $flag = $tree->right;
    $tree->right = invertTree($tree->left);
    $tree->left = invertTree($flag);
    return $tree;
}


class BinaryNode
{
    public ?int $value = null; // Node value
    public ?BinaryNode $left = null; // Left child
    public ?BinaryNode $right = null; // Right child

    public function __construct(int $value)
    {
        $this->value = $value;
    }
}

// Basic use
$root = new BinaryNode(1);
$rootLeftChild = new BinaryNode(2);
$rootRightChild = new BinaryNode(3);

$root->left = $rootLeftChild;
$root->right = $rootRightChild;

echo $root->value; // 1
echo $root->left->value; // 2
echo $root->right->value; // 3

$invertedTree = invertTree($root);

echo $invertedTree->value; // 1
echo $invertedTree->left->value; // 3
echo $invertedTree->right->value; // 2