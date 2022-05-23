<?php

class BinarySearch
{
    /**
     * Function for Searching the Element in the array
     * Passing array, lower index, higher index and element to search as parameter
     * returns the index of element, if present
     * else returns -1 
     */
    function search($searchArray, $lower, $higher, $searchElement)
    {
        if ($higher >= $lower) {
            $mid = ceil($lower + ($higher - $lower) / 2);

            if ($searchArray[$mid] == $searchElement) {
                return $mid;
            } elseif ($searchArray[$mid] > $searchElement) {
                return $this->search($searchArray, $lower, $mid - 1, $searchElement);
            } else {
                return $this->search($searchArray, $mid + 1, $higher, $searchElement);
            }
        } else {
            return -1;
        }
    }
}
$binarySearch = new BinarySearch();

$searchArray = array(1, 2, 5, 7, 11, 13, 15, 17, 19, 25);
$lower = 0;
$higher = count($searchArray) - 1;
$searchElement = 2;
$result = $binarySearch->search($searchArray, $lower, $higher, $searchElement);
if ($result == -1) {
    echo "Element is not present in array";
} else {
    echo "Element is present at index " . $result;
}
