<?php
ini_set('memory_limit', '2G');

$scriptName = $argv[1];
print "Script: {$scriptName}\n";

include_once("./{$scriptName}.php");

// simple tests

if (getStringOfNumbers(0) !== '0') {
   throw new Exception;
}
if (getStringOfNumbers(1) !== '0,1') {
   throw new Exception;
}
if (getStringOfNumbers(10) !== '0,1,2,3,4,5,6,7,8,9,10') {
   throw new Exception;
}

// benchmark

$to = intval($argv[2] ?? 1000);
print "To: {$to}\n";

$attempts = intval($argv[3] ?? 1000);
print "Attempts: {$attempts}\n";

$t = microtime(true);
$m = memory_get_peak_usage(true);

for($i = 0; $i < $attempts; $i++) {
   getStringOfNumbers($to);
}

print "Time: " . (microtime(true) - $t) . "\n";
print "Memory: " . (memory_get_peak_usage(true) - $m) . "\n";
