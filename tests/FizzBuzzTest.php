<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include 'src/FizzBuzz.php';

class FizzBuzzTest extends TestCase
{

    public function testFizzBuzz(): void
    {
        $this->assertEquals(
            'Fizz',
            FizzBuzz::calculation(3)
        );

        $this->assertEquals(
            'Buzz',
            FizzBuzz::calculation(5)
        );

        $this->assertEquals(
            'FizzBuzz',
            FizzBuzz::calculation(15)
        );

        $this->assertEquals(
            '1',
            FizzBuzz::calculation(1)
        );
    }
}