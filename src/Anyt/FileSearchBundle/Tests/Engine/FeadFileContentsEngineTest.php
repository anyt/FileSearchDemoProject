<?php
/**
 * @author Andrey Yatsenco <yatsenco@gmail.com>
 */


namespace Anyt\FileSearchBundle\Tests\Engine;


use Anyt\FileSearchBundle\Engine\ReadFileContentsEngine;

class ReadFileContentsEngineTest extends AbstractEngineTest
{
    protected function createEngine()
    {
        return new ReadFileContentsEngine();
    }

}