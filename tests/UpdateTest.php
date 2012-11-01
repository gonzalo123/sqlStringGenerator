<?php
use Sql\Update;

class UpdateTest extends PHPUnit_Framework_TestCase
{
    public function testSimpleUpdate()
    {
        $update = Update::create('tablename')->setValues(['a' => 1]);
        $this->assertEquals('UPDATE tablename SET a = 1', $update);

        $update = Update::create('tablename')->setValues(['a' => 1, 'b' => 2]);
        $this->assertEquals('UPDATE tablename SET a = 1, b = 2', $update);

        $update = Update::create('tablename')->setValues(['a' => 1])->setWhere(['a' => 2]);
        $this->assertEquals('UPDATE tablename SET a = 1 WHERE a = 2', $update);
    }
}