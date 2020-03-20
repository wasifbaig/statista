<?php
declare(strict_types=1);

/**
 * Class FizzBuzz
 * Generate FizzBuzz list from the numbers
 */
class FizzBuzz
{
    /**
     * @param int $start start value
     * @param int $end   end value
     */
    public function generate(int $start, int $end) : void
    {
        $list = range($start, $end);
        echo "<ul>", array_walk(
            $list, function ($value) {
                echo '<li>'. $this->calculation($value) . '</li>';
            }
        ) ? null : null, "</ul>";
    }

    /**
     * @param  int $value number that will be processed
     * @return string
     */
    public static function calculation(int $value) : string
    {
        return  ($value % 3 == 0 ? 'Fizz' : '') .
                ($value % 5 == 0 ? 'Buzz' : '') .
                ($value % 5 !== 0 && $value % 3 !== 0 ? strval($value) : '');
    }
}
