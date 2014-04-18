<?php

/**
 * @author Michael Caldera <michcald@gmail.com>
 */
class IntTest extends PHPUnit_Framework_TestCase
{
    public function testFilter()
    {
        $val = new Michcald\Filter\Number\Int();
        
        $this->assertEquals($val->filter(0), true);
        $this->assertEquals($val->filter(1), true);
        $this->assertEquals($val->filter(2), true);
        
        $this->assertEquals($val->filter(-1), true);
        $this->assertEquals($val->filter(-0), true);
        
        $this->assertEquals($val->filter(0.0), false);
        $this->assertEquals($val->filter(0.1), false);
        $this->assertEquals($val->filter(1.1), false);
        
        $this->assertEquals($val->filter('0'), false);
        
        $this->assertEquals($val->filter('0a'), false);
        $this->assertEquals($val->filter('a'), false);
    }
}
