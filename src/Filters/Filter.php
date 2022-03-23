<?php

namespace charleshopkinsiv\Ui\Filter;

interface Filter
{

    private $name;

    public function __construct(string $name);

    public function setName(string $name) { $this->name = $name; }
    public function getName() { return $this->name; }
}