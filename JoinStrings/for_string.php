<?php

function getStringOfNumbers(int $to, string $separator = ','): string {
    $result = '0';

    for ($i = 1; $i <= $to; $i++) {
        $result .= "{$separator}{$i}";
    }

    return $result;
}