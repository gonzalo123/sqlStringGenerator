<?php
namespace Sql;

class Select implements IFace
{
    use Traits\SqlCommon;
    use Traits\HasWhere;
    use Traits\HasColumns;

    public function getString()
    {
        $columns = is_null($this->columns) ? '*' : implode(', ', $this->columns);
        $sql     = "SELECT {$columns} FROM {$this->tableName}";
        if (!is_null($this->where)) {
            $sql .= " WHERE " . $this->getBuiltWhere();
        }
        return $sql;
    }
}