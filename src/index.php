<?php
/**
 * Index page of application
 */
declare(strict_types=1);
require 'FizzBuzz.php';

$sample = new FizzBuzz();
$sample->generate(1, 100);
