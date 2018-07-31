<?php

declare(strict_types=1);

namespace Example;

class FizzBuzzGenerator
{
    public function generate(int $limit = 100): \Generator
    {
        for ($i = 1; $i <= $limit; $i++) {
            /*
             * can be also $i % 3 === 0 && $i % 5 === 0
             * LCM(3, 5) = 15
             */
            if ($i % 15 === 0) {
                yield "FizzBuzz";
            } elseif ($i % 3 === 0) {
                yield "Fizz";
            } elseif ($i % 5 === 0) {
                yield "Buzz";
            } else {
                yield $i;
            }
        }
    }
}
