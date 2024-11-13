<?php
function spinWords(string $str): string {
  
   $words = explode(" ", $str);
   
    foreach ($words as $key => $word) {
  
        if (strlen($word) >= 5) {
            $words[$key] = strrev($word);
        }
    }
  
  
    return implode(" ", $words);
}