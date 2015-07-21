<?php
/**
 * @author Andrey Yatsenco <yatsenco@gmail.com>
 */


namespace Anyt\FileSearchBundle\Engine;


/**
 * Class GrepEngine
 * @package Anyt\FileSearchBundle\Engine
 */
class GrepEngine implements EngineInterface
{
    /**
     * @param string $keyword
     * @param string $path
     * @return \SplFileInfo[]
     */
    public function find($keyword, $path)
    {
        $output = array();

        exec("grep -l ".escapeshellarg($keyword).' '.$path."/*", $output);

        return array_map(
            function ($filename) {
                return new \SplFileInfo($filename);
            },
            $output
        );
    }

}