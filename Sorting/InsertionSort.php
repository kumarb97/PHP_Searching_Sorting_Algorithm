<?php

class InsertionSort
{
    /**
     * Function for Displaying the Elements of the array
     * Passing 'array' as parameter
     * Printing the array
     */
    function display($sort)
    {
        for ($i = 0; $i < count($sort); $i++) {
            echo $sort[$i] . " ";
        }
    }

    /**
     * Function to sort elements by swapping
     * passing array as the parameter
     * returns the sorted array
     */
    function insertion_Sort($insertionSortArray)
    {
        for ($i = 0; $i < count($insertionSortArray); $i++) {
            $val = $insertionSortArray[$i];
            $j = $i - 1;
            while ($j >= 0 && $insertionSortArray[$j] > $val) {
                $insertionSortArray[$j + 1] = $insertionSortArray[$j];
                $j--;
            }
            $insertionSortArray[$j + 1] = $val;
        }
        return $insertionSortArray;
    }
}
$insertionSort = new InsertionSort();

$insertionSortArray = array(81, 5, 67, 20, 95, 4, 5, 29, 3, -3);
echo "Original Array :\n";
$insertionSort->display($insertionSortArray);
echo "\nSorted Array :\n";
$sortedArray = $insertionSort->insertion_Sort($insertionSortArray);
$insertionSort->display($sortedArray);
