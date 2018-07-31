<?php

declare(strict_types=1);

namespace Example;

use PHPUnit\Framework\TestCase;

class FizzBuzzGeneratorTest extends TestCase
{
    /**
     * @var FizzBuzzGenerator
     */
    private $fizzBuzzGenerator;

    protected function setUp()
    {
        $this->fizzBuzzGenerator = new FizzBuzzGenerator();
    }

    public function testGenerateFirst100(): void
    {
        $i = 1;
        foreach ($this->fizzBuzzGenerator->generate(100) as $line) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                $this->assertEquals("FizzBuzz", $line);
            } elseif ($i % 3 === 0) {
                $this->assertEquals("Fizz", $line);
            } elseif ($i % 5 === 0) {
                $this->assertEquals("Buzz", $line);
            } else {
                $this->assertEquals($i, $line);
            }

            $i++;
        }
    }
}
