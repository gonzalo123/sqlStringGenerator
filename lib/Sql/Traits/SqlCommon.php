<?php
namespace Sql\Traits;

trait SqlCommon
{
    protected $tableName;

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
    }

    static function create($tableName)
    {
        return new self($tableName);
    }

    function __toString()
    {
        return $this->getString();
    }
}