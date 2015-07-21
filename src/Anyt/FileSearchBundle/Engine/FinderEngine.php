<?php
/**
 * @author Andrey Yatsenco <yatsenco@gmail.com>
 */


namespace Anyt\FileSearchBundle\Engine;

use Symfony\Component\Finder\Finder;

/**
 * Class FinderEngine
 * @package Anyt\FileSearchBundle\Engine
 */
class FinderEngine implements EngineInterface
{
    /**
     * @var Finder
     */
    private $finder;


    /**
     * @param Finder $finder
     */
    public function __construct(Finder $finder)
    {
        $this->finder = $finder;
    }

    /**
     * @param string $keyword
     * @param string $dir
     * @return Finder
     */
    public function find($keyword, $dir = '/')
    {
        return $this->finder
            ->files()
            ->in($dir)
            ->contains($keyword);
    }
}