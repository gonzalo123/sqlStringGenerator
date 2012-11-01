<?php
use Sql\Select;

class SelectTest extends PHPUnit_Framework_TestCase
{
    public function testSimpleSelect()
    {
        $this->assertEquals('SELECT * FROM tablename', Select::create('tablename')->getString());

        $this->assertEquals('SELECT a, b FROM tablename', Select::create('tablename')
            ->setColumns(array('a', 'b'))
            ->getString());

        $this->assertEquals('SELECT * FROM tablename', Select::create('tablename'));
    }

    public function testSelectWithSimpleWhere()
    {
        $sql = Select::create('tablename')->setWhere(['a' => ':PARAM1']);
        $this->assertEquals('SELECT * FROM tablename WHERE a = :PARAM1', $sql);

        $sql = Select::create('tablename')->setWhere(['a' => ':PARAM1', 'b' => 2]);
        $this->assertEquals('SELECT * FROM tablename WHERE a = :PARAM1 AND b = 2', $sql);
    }
}