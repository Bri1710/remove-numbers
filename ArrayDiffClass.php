<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class ArrayDiffClass
{
    public function removeTheNumbersThatAreEqualInBothArrays(array $firstArrayNumbers, array $secondArrayNumbers): array
    {
        //delete numbers in the position 2 and 5
        //merge the result numbers
        //return [1, 2, 2, 5, 5, 6, 4, 4]

        $result = [];

        foreach ($firstArrayNumbers as $number) {
            $numberToDelete = array_search($number, $secondArrayNumbers);
            unset($secondArrayNumbers[$numberToDelete]);
            $result = array_merge($firstArrayNumbers, $secondArrayNumbers);
        }
        return $result;
        // Array ( [0] => 1 [1] => 2 [2] => 2 [3] => 5 [4] => 5 [5] => 6 [6] => 4 [7] => 4 )

    }
}



$arrayDiffClass = new ArrayDiffClass();
print_r($arrayDiffClass->removeTheNumbersThatAreEqualInBothArrays([1, 2, 2, 5, 5, 6],[2, 5, 4, 4]));
