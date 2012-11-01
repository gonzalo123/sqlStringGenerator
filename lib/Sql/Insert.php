<?php
namespace Sql;

class Insert implements IFace
{
    use Traits\SqlCommon;
    use Traits\HasColumns;
    use Traits\HasValues;

    public function getString()
    {
        $columns = NULL;
        if (!is_null($this->columns)) {
            $columns = '(' . implode(', ', $this->columns) . ')';
        }
        $values =  implode(', ', $this->values);
        return "INSERT INTO {$this->tableName}{$columns} VALUES ({$values})";
    }
}