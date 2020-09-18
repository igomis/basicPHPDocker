<?php

namespace Tests;
include_once dirname(__FILE__) . '/../helpers/myHelpers.php';
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testPrueba(){
        $this->assertEquals(true,true);
    }
}
