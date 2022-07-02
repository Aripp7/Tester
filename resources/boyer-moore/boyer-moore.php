<?php

/**
 * Returns the index of the first occurrence of the 
 * specified substring. If it's not found return -1.
 * 
 * @param text The string to be scanned
 * @param pattern The target string to search
 * @return The start index of the substring
 */
function BoyerMoore($text, $pattern)
{
    $patlen = strlen($pattern);
    $textlen = strlen($text);
    $table = makeCharTable($pattern);

    for ($i = $patlen - 1; $i < $textlen;) {
        $t = $i;
        for ($j = $patlen - 1; $pattern[$j] == $text[$i]; $j--, $i--) {
            if ($j == 0) return $i;
        }
        $i = $t;
        if (array_key_exists($text[$i], $table))
            $i = $i + max($table[$text[$i]], 1);
        else
            $i += $patlen;
    }
    return -1;
}

function makeCharTable($string)
{
    $len = strlen($string);
    $table = array();
    for ($i = 0; $i < $len; $i++) {
        $table[$string[$i]] = $len - $i - 1;
    }
    return $table;
}


//////////////////////////////////////////////////


// beda 
function badCharHeuristic($str, $size, &$badchar)
{
    for ($i = 0; $i < 256; $i++)
        $badchar[$i] = -1;

    for ($i = 0; $i < $size; $i++)
        $badchar[ord($str[$i])] = $i;
}

function SearchString($str, $pat)
{
    $m = strlen($pat);
    $n = strlen($str);
    $i = 0;

    badCharHeuristic($pat, $m, $badchar);

    $s = 0;
    while ($s <= ($n - $m)) {
        $j = $m - 1;

        while ($j >= 0 && $pat[$j] == $str[$s + $j])
            $j--;

        if ($j < 0) {
            $arr[$i++] = $s;
            $s += ($s + $m < $n) ? $m - $badchar[ord($str[$s + $m])] : 1;
        } else
            $s += max(1, $j - $badchar[ord($str[$s + $j])]);
    }

    for ($j = 0; $j < $i; $j++) {
        $result[$j] = $arr[$j];
    }

    return $result;
}
