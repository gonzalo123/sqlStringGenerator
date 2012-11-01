<?php
use Sql\Delete;

class DeleteTest extends PHPUnit_Framework_TestCase
{
    public function testSimpleDelete()
    {
        $delete = Delete::create('tablename')->setWhere(['a' => 1]);
        $this->assertEquals("DELETE tablename WHERE a = 1", $delete);

        $delete = Delete::create('tablename')->setWhere(['a' => 1, 'b' => 2]);
        $this->assertEquals("DELETE tablename WHERE a = 1 AND b = 2", $delete);
    }
}