<?php
/**
 * @author Andrey Yatsenco <yatsenco@gmail.com>
 */


namespace Anyt\FileSearchBundle\Tests\Engine;


abstract class AbstractEngineTest extends \PHPUnit_Framework_TestCase
{
    abstract protected function createEngine();

    public function testFind()
    {
        $engine = $this->createEngine();

        $result = $engine->find('Lorem ipsum', __DIR__.'/../../../../../web/tests_files');

        $this->assertTrue($result[0] instanceof \SplFileInfo);
    }

    public function testFindEmptyResult()
    {
        $engine = $this->createEngine();

        $result = $engine->find('0', __DIR__.'/../../../../../web/tests_files');

        $this->assertEmpty($result);
    }
}