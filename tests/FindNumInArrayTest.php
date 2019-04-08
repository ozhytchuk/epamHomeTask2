<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class FindNumInArrayTest extends TestCase
{
    public function positiveDataProvider()
    {
        return [
            [
                [342, 55, 33, 123, 66, 63, 9],
                3,
                [342, 33, 123, 63]
            ],
            [
                [342, 55, 33, 123, 66, 63, 9],
                6,
                [66, 63]
            ],
        ];
    }

    /**
     * @param $array
     * @param $findNum
     * @param $expected
     *
     * @dataProvider positiveDataProvider
     */
    public function testPositive($array, $findNum, $expected)
    {
        $result = findNumInArray($array, $findNum);
        $this->assertEquals($expected, $result);
    }
}