//Scrivi una funziona che ritorni il numero di vocali presenti in una stringa aeiou.

<?php

function getCount(string $str): int {
    
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;

   
    $str = strtolower($str);

   
    foreach (str_split($str) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }

    return $count;
}