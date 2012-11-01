<?php
namespace Sql\Traits;

trait HasColumns
{
    protected $columns = NULL;

    public function setColumns($columns)
    {
        $this->columns = $columns;
        return $this;
    }
}