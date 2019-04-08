<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class CharsMappingTest extends TestCase
{
    public function positiveDataProvider()
    {
        return [
            ['ATTGC', 'TAACG'],
            ['GTAT', 'CATA'],
        ];
    }

    /**
     * @param $string
     * @param $expected
     *
     * @dataProvider positiveDataProvider
     */
    public function testPositive($string, $expected)
    {
        $result = charsMapping($string);
        $this->assertEquals($expected, $result);
    }
}