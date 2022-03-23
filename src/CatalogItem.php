<?php


namespace charleshopkinsiv\Ui;


class CatalogItem
{

    private string $title, $img_url;

    public function __construct(string $title, string $img_url)
    {

        $this->setTitle($title);
        $this->setImage($img_url);
    }

    public function setTitle(string $title)
    {

        $this->title = $title;
    }

    public function getTitle() : string
    {

        return $this->title;
    }

    public function setImage(string $img_url)
    {

        $this->img_url = $img_url;
    }

    public function getImage() : string
    {

        return $this->img_url;
    }
}