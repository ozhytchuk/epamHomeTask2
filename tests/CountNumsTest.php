<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class CountNumsTest extends TestCase
{
    public function positiveDataProvider()
    {
        return [
            [
                [342, 55, 33, 123, 66, 63, 9],
                3,
                5
            ],
            [
                [342, 55, 33, 123, 66, 63, 9],
                2,
                2
            ],
            [
                [342, 55, 33, 123, 66, 63, 9],
                6,
                3
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
        $result = countNums($array, $findNum);
        $this->assertEquals($expected, $result);
    }
}