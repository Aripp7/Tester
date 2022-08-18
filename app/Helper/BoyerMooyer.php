<?php

namespace App\Helper;

use Illuminate\Support\Str;

class BoyerMooyer
{
    private static function array_multi_unique($multiArray)
    {
        $uniqueArray = array();
        foreach ($multiArray as $subArray) {

            if (!in_array($subArray, $uniqueArray)) {
                $uniqueArray[] = $subArray;
            }
        }
        return $uniqueArray;
    }

    private static function maxInteger($a,  $b)
    {
        return ($a > $b) ? $a : $b;
    }

    private static function badCharHeuristic($str, $size)
    {
        $noOfChars = 256;

        // fill array
        $badChar = array_fill(0, $noOfChars, -1);

        for ($i = 0; $i < $size; $i++) {
            // ord = convert string to ascii
            $badChar[ord($str[$i])] = $i;
        }

        return $badChar;
    }

    public static function searchData($listData, $searchList, $keyword, $toAssocArray = false)
    {
        $start = microtime(true); // start time
        $result = [];
        // count((is_countable($listData) ? $listData : []))
        // count($listData);
        for ($i = 0; $i < count($listData); $i++) {
            $data = $listData[$i];

            // convert object to associative array
            $dataArray = json_decode(json_encode($data), true);

            foreach ($searchList as $searchItem) {
                // get data from dataArray use $searchItem as a key
                $searchItem = $dataArray[$searchItem];

                // convert to lower case
                $searchItem = Str::lower($searchItem);
                $keyword = Str::lower($keyword);

                // handle jika ada keyword adalah kalimat yang mengandung spasi
                // bagi kalimat menjadi kata kata
                $keywordContainSpace = explode(' ', $keyword);

                foreach ($keywordContainSpace as $newKeyword) {
                    // boyer mooyer algorithm
                    $txtArray = str_split($searchItem);
                    $keywordArray = str_split($newKeyword);
                    $m = count($keywordArray);
                    $n = count($txtArray);
                    $isFound = false;
                    $badChar = BoyerMooyer::badCharHeuristic($keywordArray, $m);

                    $shift = 0;
                    while ($shift <= ($n - $m)) {
                        $j = $m - 1;

                        while ($j >= 0 && $keywordArray[$j] == $txtArray[$shift + $j]) {
                            $j--;
                        }

                        if ($j < 0) {
                            // if found
                            $isFound = true;

                            $shift += ($shift + $m < $n) ? $m - $badChar[ord($txtArray[$shift + $m])] : 1;
                        } else {
                            $shift += BoyerMooyer::maxInteger(1, $j - $badChar[ord($txtArray[$shift + $j])]);
                        }
                    }

                    if ($isFound) {
                        if ($toAssocArray) {
                            array_push($result, $dataArray);
                        } else {
                            array_push($result, $data);
                        }

                        // jika ketemu, langsung keluar dari looping mencegah duplikasi data
                        break;
                    }
                }
            }
        }

        $end = microtime(true); // end time

        // calculate search speed
        $speedResult = $end - $start;
        $searchSpeed = $speedResult * 1000;

        // filter lagi untuk memastikan tidak ada duplikasi
        $unique = BoyerMooyer::array_multi_unique($result);

        return [
            'result' => $unique,
            'search_speed' => $searchSpeed,
        ];
    }
}
