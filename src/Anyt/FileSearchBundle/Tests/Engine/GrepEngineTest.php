<?php
/**
 * @author Andrey Yatsenco <yatsenco@gmail.com>
 */


namespace Anyt\FileSearchBundle\Tests\Engine;

use Anyt\FileSearchBundle\Engine\GrepEngine;

class GrepEngineTest extends AbstractEngineTest
{
    protected function createEngine()
    {
        return new GrepEngine();
    }

}