<?php
namespace YourName\MyHelper\Tests;

use PHPUnit\Framework\TestCase;
use YourName\MyHelper\Helper;

class HelperTest extends TestCase
{
    public function testRandomStringLength()
    {
        $string = Helper::randomString(10);
        $this->assertEquals(10, strlen($string));
    }

    public function testArrayMergeDeep()
    {
        $array1 = ['a' => ['b' => 1]];
        $array2 = ['a' => ['c' => 2]];
        $result = Helper::arrayMergeDeep($array1, $array2);

        $this->assertEquals(['a' => ['b' => 1, 'c' => 2]], $result);
    }
}