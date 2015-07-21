<?php
/**
 * @author Andrey Yatsenco <yatsenco@gmail.com>
 */


namespace Anyt\FileSearchBundle\Engine;


/**
 * Class ReadFileContentsEngine
 * @package Anyt\FileSearchBundle\Engine
 */
class ReadFileContentsEngine extends AbstractReadFileEngine
{
    /**
     * @param $fileName
     * @param $keyword
     * @return bool
     */
    public function isFileContainsKeyword($fileName, $keyword)
    {
        if ($fileContents = file_get_contents($fileName)) {
            if (preg_match("/". $keyword . '/i', $fileContents, $matches)) {
                return true;
            }
        }
        return false;

    }
}