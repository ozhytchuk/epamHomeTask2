<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class RemoveSlashTest extends TestCase
{
    public function positiveDataProvider()
    {
        return [
            ['var_test_text', 'varTestText'],
            ['var test text', 'var test text'],
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
        $result = removeSlash($str);
        $this->assertEquals($expected, $result);
    }
}