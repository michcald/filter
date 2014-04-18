<?php

/**
 * @author Michael Caldera <michcald@gmail.com>
 */
class BoolTest extends PHPUnit_Framework_TestCase
{
    public function testFilter()
    {
        $filter = new Michcald\Filter\Bool();
        
        $this->assertEquals($filter->filter(true), true);
        $this->assertEquals($filter->filter(false), false);
        
        $this->assertEquals($filter->filter(0), false);
        $this->assertEquals($filter->filter(1), true);
        
        $this->assertEquals($filter->filter('true'), true);
        $this->assertEquals($filter->filter('false'), true);
        
        $this->assertEquals($filter->filter('0'), true);
        $this->assertEquals($filter->filter('1'), true);
    }
}
