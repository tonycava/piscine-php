<?php

function invertTree(BinaryNode|null $tree): BinaryNode|null
{
    if ($tree == null) return null;
    $flag = $tree->right;
    $tree->right = invertTree($tree->left);
    $tree->left = invertTree($flag);
    return $tree;
}