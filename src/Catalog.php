<?php

namespace charleshopkinsiv\Ui;


class Catalog implements \iterator
{

    private Ui $Ui;
    private array $ITEMS;
    private int $pointer = 0;

    private static $default_item_limit = 8;

    public function __construct(Ui $Ui)
    {
        
        $this->Ui = $Ui;
    }


    public function getUi() : Ui { return $this->Ui; }


    public function current()
    {

        return $this->ITEMS[$this->pointer];
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

        return isset($this->ITEMS[$this->pointer]);
    }

    public function add(CatalogItem $Item)
    {

        $this->ITEMS[] = $Item;
    }
}