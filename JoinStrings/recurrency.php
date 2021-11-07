<?php

function getStringOfNumbers(int $to, string $separator = ','): string {
   return ($to > 0) 
      ? getStringOfNumbers($to - 1) . "{$separator}{$to}"
      : '0';
}