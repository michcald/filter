<?php

namespace Michcald\Filter;

class Bool extends \Michcald\Filter
{

    public function filter($value)
    {
        if (is_string($value)) {
            return true;
        }
        
        return filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }

}
