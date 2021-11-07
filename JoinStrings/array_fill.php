<?php

function getStringOfNumbers(int $to, string $separator = ','): string {  
    return join(
        $separator, 
        array_keys(
            array_fill(0, $to + 1, null)
        )
    );
}