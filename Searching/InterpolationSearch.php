<?php

class InterpolationSearch
{
    /**
     * Function for Searching the Element in the array
     * Passing array and element to search as parameter
     * returns the index of element, if present
     * else returns -1
     */
    function search($searchArray, $searchElement)
    {
        $lower = 0;
        $higher = count($searchArray) - 1;

        while ($lower <= $higher && $searchElement >= $searchArray[$lower] && $searchElement <= $searchArray[$higher]) {
            if ($lower == $higher) {
                if ($searchArray[$lower] == $searchElement) {
                    return $lower;
                } else {
                    return -1;
                }
            }

            // Probing the position with keeping 
            // uniform distribution in mind. 
            $probing = intval($lower + (($searchElement - $searchArray[$lower]) * ($higher - $lower) /
                ($searchArray[$higher] - $searchArray[$lower])));

            if ($searchArray[$probing] == $searchElement) {
                return $probing;
            }
            // If search element is larger i.e search element is in upper part 
            elseif ($searchArray[$probing] < $searchElement) {
                $lower = $probing + 1;
            }
            // If search element is smaller i.e search element is in the lower part 
            else {
                $higher = $probing - 1;
            }
        }
        return -1;
    }
}
$interpolationSearch = new InterpolationSearch();

$searchArray = array(3, 5, 7, 9, 11, 13, 15, 17, 19, 25);
$searchElement = 20;
$result = $interpolationSearch->search($searchArray, $searchElement);
if ($result == -1) {
    echo "Element is not present in array";
} else {
    echo "Element is present at index " . $result;
}
