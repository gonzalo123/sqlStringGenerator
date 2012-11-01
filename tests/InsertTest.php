<?php
use Sql\Insert;

class InsertTest extends PHPUnit_Framework_TestCase
{
    public function testSimpleInsert()
    {
        $insert = Insert::create('tablename')->setValues([':PARAM1', ':PARAM2'])->getString();
        $this->assertEquals('INSERT INTO tablename VALUES (:PARAM1, :PARAM2)', $insert);

        $insert = Insert::create('tablename')->setColumns(['a', 'b'])->setValues([':PARAM1', ':PARAM2'])->getString();
        $this->assertEquals('INSERT INTO tablename(a, b) VALUES (:PARAM1, :PARAM2)', $insert);
    }
}