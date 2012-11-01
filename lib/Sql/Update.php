<?php
namespace Sql;

class Update implements IFace
{
    use Traits\SqlCommon;
    use Traits\HasWhere;
    use Traits\HasValues;

    public function getString()
    {
        $values = $this->getSetValues();
        $sql    = "UPDATE {$this->tableName} SET {$values}";

        if (!is_null($this->where)) {
            $sql .= " WHERE " . $this->getBuiltWhere();
        }
        return $sql;
    }
}