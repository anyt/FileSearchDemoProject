<?php
/**
 * @author Andrey Yatsenco <yatsenco@gmail.com>
 */


namespace Anyt\FileSearchBundle\Engine;

/**
 * Class AbstractReadFileEngine
 * @package Anyt\FileSearchBundle\Engine
 */
abstract class AbstractReadFileEngine implements EngineInterface
{

    /**
     * @param $path
     * @return array
     */
    protected function getFileNamesList($path)
    {
        return glob($path.'/*');
    }

    /**
     * @param $fileName
     * @param $keyword
     * @return bool
     */
    abstract public function isFileContainsKeyword($fileName, $keyword);

    /**
     * @param string $keyword
     * @param string $path
     * @return \SplFileInfo[]
     */
    public function find($keyword, $path)
    {
        $files = array();
        foreach ($fileNames = $this->getFileNamesList($path) as $fileName) {
            if ($this->isFileContainsKeyword($fileName, $keyword)) {
                $files[] = new \SplFileInfo($fileName);
            }
        }

        return $files;
    }

}