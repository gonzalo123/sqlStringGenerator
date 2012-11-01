<?php
namespace Sql\Traits;

trait HasWhere
{
    protected $where = NULL;

    public function setWhere($where)
    {
        $this->where = $where;
        return $this;
    }

    protected function getBuiltWhere()
    {
        return implode(' AND ', array_map(function($key, $value) {
            return "{$key} = {$value}";
        }, array_keys((array) $this->where), array_values((array) $this->where)));
    }
}