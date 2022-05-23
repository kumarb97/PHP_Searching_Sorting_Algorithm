<?php

class LinearSearch
{
    /**
     * Function for Searching the Element in the array
     * Passing array and element to search as parameter
     * returns the index of element, if present
     * else returns -1
     */
    function search($linearSearchArray, $searchElement)
    {
        for ($i = 0; $i < count($linearSearchArray); $i++) {
            if ($linearSearchArray[$i] == $searchElement)
                return $i;
        }
        return -1;
    }
}
$linearSearch = new LinearSearch();

$linearSearchArray = array(88, 4, 79, 11, 101, 3, 4, 25, 8, 1);
$searchElement = 1;
$result = $linearSearch->search($linearSearchArray, $searchElement);
if ($result == -1) {
    echo "Element is not present in array";
} else {
    echo "Element is present at index " . $result;
}
