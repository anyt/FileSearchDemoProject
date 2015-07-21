<?php
/**
 * @author Andrey Yatsenco <yatsenco@gmail.com>
 */


namespace Anyt\FileSearchBundle\Tests\Engine;


use Anyt\FileSearchBundle\Engine\ReadFileByLineEngine;

class ReadFileByLineEngineTest  extends AbstractEngineTest
{
    protected function createEngine()
    {
        return new ReadFileByLineEngine();
    }

}