<?php
function moveZeros(array $arr): array {
    $result = [];
    $zeros = [];

    foreach ($arr as $element) {
       
        if ($element === 0 || $element === 0.0) {
            $zeros[] = 0; 
        } else {
            $result[] = $element;
        }
    }

    return array_merge($result, $zeros);
}