<?php

class MergeSort
{
    /**
     * Function for Displaying the Elements of the array
     * Passing 'n' length of array and 'array' as parameters
     */
    function display($length, $sort)
    {
        for ($i = 0; $i < $length; $i++) {
            echo $sort[$i] . " ";
        }
    }

    /**
     * Function to sort array by first dividing into pairs
     * Passing the array as a parameter
     * Returns the output from merge Function
     */
    function merge_sort($mergeSortAarray)
    {
        if (count($mergeSortAarray) == 1) {
            return $mergeSortAarray;
        }
        $mid = count($mergeSortAarray) / 2;
        $left = array_slice($mergeSortAarray, 0, $mid);
        $right = array_slice($mergeSortAarray, $mid);
        $left = $this->merge_sort($left);
        $right = $this->merge_sort($right);
        return $this->merge($left, $right);
    }

    /**
     * Function to Sort the arrays
     * Passing left and right arrays as parameters
     * returns temp having sorted elements
     */
    function merge($left, $right)
    {
        $temp = array();
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] > $right[0]) {
                $temp[] = $right[0];
                $right = array_slice($right, 1);
            } else {
                $temp[] = $left[0];
                $left = array_slice($left, 1);
            }
        }
        while (count($left) > 0) {
            $temp[] = $left[0];
            $left = array_slice($left, 1);
        }
        while (count($right) > 0) {
            $temp[] = $right[0];
            $right = array_slice($right, 1);
        }
        return $temp;
    }
}
$mergeSort = new MergeSort();

$mergeSortAarray = array(81, 5, 74, 20, 95, 6, 4, 19, 7, 1);
$length = count($mergeSortAarray);
echo "Original Array : ";
$mergeSort->display($length, $mergeSortAarray);
echo "\nSorted Array : ";
$sortedArray = $mergeSort->merge_sort($mergeSortAarray);
$length = count($sortedArray);
$mergeSort->display($length, $sortedArray);
