<?php
namespace Sql;

class Delete implements IFace
{
    use Traits\SqlCommon;
    use Traits\HasWhere;

    public function getString()
    {
        $sql = "DELETE {$this->tableName}";
        if (!is_null($this->where)) {
            $sql .= " WHERE " . $this->getBuiltWhere();
        }
        return $sql;
    }
}