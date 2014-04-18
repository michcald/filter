<?php

namespace Michcald\Filter\Number;

class Int extends \Michcald\Filter
{

    public function filter($value)
    {
        if ($value === 0) {
            return true;
        }
        
        return filter_var($value, FILTER_VALIDATE_INT);
    }

}
