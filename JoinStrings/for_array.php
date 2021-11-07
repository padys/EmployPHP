<?php

function getStringOfNumbers(int $to, string $separator = ','): string {
    $result = [];

    for ($i = 0; $i <= $to; $i++) {
        $result[] = $i;
    }

    return join($separator, $result);
}