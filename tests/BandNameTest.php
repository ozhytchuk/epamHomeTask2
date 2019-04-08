<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class BandNameTest extends TestCase
{
    public function positiveDataProvider()
    {
        return [
            ['dolphin' , 'The Dolphin'],
            ['alaska', 'Alaskalaska'],
            ['europe', 'Europeurope'],
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
        $result = bandName($string);
        $this->assertEquals($expected, $result);
    }
}