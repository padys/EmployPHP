<?php

function getStringOfNumbers(int $to, string $separator = ','): string {   
    return join(
        $separator, 
        range(0, $to)
    );
}