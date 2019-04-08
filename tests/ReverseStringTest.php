<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class ReverseStringTest extends TestCase
{
    public function positiveDataProvider()
    {
        return [
            ['ФЫВА олдж', 'АВЫФ ждло'],
            ['ASDF ghjk', 'FDSA kjhg'],
        ];
    }

    /**
     * @param $str
     * @param $expected
     *
     * @dataProvider positiveDataProvider
     */
    public function testPositive($str, $expected)
    {
        $result = reverseString($str);
        $this->assertEquals($expected, $result);
    }
}