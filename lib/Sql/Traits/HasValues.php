<?php
namespace Sql\Traits;

trait HasValues
{
    protected $values = NULL;

    public function setValues($values)
    {
        $this->values = $values;
        return $this;
    }

    private function getSetValues()
    {
        return implode(', ', array_map(function ($key, $value) {
            return "{$key} = {$value}";
        }, array_keys((array)$this->values), array_values((array)$this->values)));
    }
}