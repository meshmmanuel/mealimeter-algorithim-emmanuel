<?php

$wordArray = ['stab', 'spins', 'looks', 'repaper', 'skool', 'snips', 'bats', 'soos'];


echo isPalindromic($wordArray) . ' word(s) are palindromic.';

function isPalindromic($wordArray)
{
    $isPalindromic = 0;
    foreach ($wordArray as $word) {
        if (isPalindrome($word)) {
            $isPalindromic++;
        }
    }
    return $isPalindromic;
}


function isPalindrome($word)
{
    $word = strtolower($word);
    $len = strlen($word);
    $count = 0;
    if ($len % 2 == 0) {
        for ($i = 0; $i < $len / 2; $i++) {
            if ($word[$i] ==  $word[$len - ($i + 1)]) {
                $count++;
            }
        }
        if ($count == $len / 2) {
            return true;
        }
    } else {
        for ($i = 0; $i < ($len - 1) / 2; $i++) {
            if ($word[$i] ==  $word[$len - ($i + 1)]) {
                $count++;
            }
        }

        if ($count == (($len - 1) / 2)) {
            return true;
        }
    }
}
