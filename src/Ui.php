<?php
namespace charleshopkinsiv\Ui;

class Ui
{

    private FilterCollection $FilterCollection;
    private $Colleciton = [];
    private Catalog $Catalog;

    private int $item_count = 0;
    private $item_limit;
    private $page = 1;

    public function __construct()
    {

        $this->FilterCollection = new FilterCollection();
    }


    public function setTotalItemCount(int $count)
    {

        $this->item_count = $count;
    }

    public function getTotalItemCount()
    {

        return $this->item_count;
    }


    public function setItemLimit($limit)
    {

        $this->item_limit = $limit;
    }


    public function getItemLimit()
    {

        return $this->item_limit;
    }


    public function setPage(int $page)
    {

        $this->page = $page;
    }


    public function getPage()
    {

        return $this->page;
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