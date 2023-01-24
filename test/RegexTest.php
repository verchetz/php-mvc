<?php

namespace programmer\belajar\php\MVC;

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase{
    public function testReg()
    {
        $path = "/product/132/cat/1hj1";
        $pattern = "#^/product/([0-9a-zA-Z]*)/cat/([0-9a-zA-Z]*)$#";
        $result = preg_match($pattern, $path, $var);

        self::assertEquals(1,$result);

        array_shift($var);

        var_dump($var);

    }
}