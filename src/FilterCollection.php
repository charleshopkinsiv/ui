<?php

namespace Ui;

use Filter\Filter;

class FilterCollection implements \iterator
{

    private array $ITEMS;
    private int $pointer = 0;

    public function __construct()
    {


    }


    public function current()
    {

        return $ITEMS[$pointer];
    }


    public function key()
    {

        return $this->pointer;
    }


    public function next()
    {

        $this->pointer++;
    }


    public function rewind()
    {

        $this->pointer = 0;
    }


    public function valid()
    {

        return isset($ITEMS[$this->pointer]);
    }

    public function add(Filter $Filter)
    {

        $ITEMS[] = $Filter;
    }
}