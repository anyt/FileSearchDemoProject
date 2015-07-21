<?php
/**
 * @author Andrey Yatsenco <yatsenco@gmail.com>
 */


namespace Anyt\FileSearchBundle\Engine;


/**
 * Class ReadFileByLineEngine
 * @package Anyt\FileSearchBundle\Engine
 */
class ReadFileByLineEngine extends AbstractReadFileEngine
{
    /**
     * @param $fileName
     * @param $keyword
     * @return bool
     */
    public function isFileContainsKeyword($fileName, $keyword)
    {
        foreach (file($fileName) as $line) {
            if (strpos($line, $keyword) !== false) {
                return true;
            }
        }
        return false;
    }
}