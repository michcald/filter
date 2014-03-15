<?php

namespace Michcald\Filter;

class Int extends \Michcald\Filter
{

    public function filter($value)
    {
        return filter_var($value, FILTER_VALIDATE_INT);
    }

}
