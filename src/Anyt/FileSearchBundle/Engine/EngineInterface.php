<?php
/**
 * @author Andrey Yatsenco <yatsenco@gmail.com>
 */


namespace Anyt\FileSearchBundle\Engine;


interface EngineInterface
{
    /**
     * @param string $keyword
     * @param string $path
     * @return \SplFileInfo[]
     */
    public function find($keyword, $path);
}