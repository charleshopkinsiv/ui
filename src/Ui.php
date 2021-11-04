<?php
namespace charleshopkinsiv\Ui;

class Ui
{

    private FilterCollection $FilterCollection;
    private $Colleciton = [];

    public function __construct()
    {

        $this->FilterCollection = new FilterCollection();
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


    public function getCatalog() : Catalog
    {

        return new Catalog($this->Collection);
    }


    public function getTable() : Table
    {

        return new Table($this->Collection);
    }


    public function getPagination() : Pagination
    {


    }


    public function getFilters() : FilterCollection
    {


    }
}