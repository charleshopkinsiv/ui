<?php
namespace Ui;

class Ui
{

    private FilterCollection $FilterCollection;
    private $Colleciton = [];
    private Catalog $Catalog;

    private int $item_count = 300;

    public function __construct()
    {

        $this->FilterCollection = new FilterCollection();
    }


    public function setItemCount(int $count)
    {

        $this->item_count = $count;
    }

    public function getItemCount()
    {

        return $this->item_count;
    }

    public function addFilter(Filter $Filter)
    {

        $FilterCollection->add($Filter);
    }


    /**
     * Inputs..... 
     * item_count
     * page
     * search
     * columns
     * filters (added with addFilter())
     */
    public function getHttpInput()
    {


    }


    public function addCollection(\Iterator $Collection)
    {

        $this->Collection = $Collection;
    }


    public function catalog() : Catalog
    {

        if(empty($this->Catalog))
            $this->Catalog = new Catalog($this);

        return $this->Catalog;
    }


    public function table() : Table
    {

        return new Table();
    }


    public function getPagination() : Pagination
    {


    }


    public function getFilters() : FilterCollection
    {


    }
}