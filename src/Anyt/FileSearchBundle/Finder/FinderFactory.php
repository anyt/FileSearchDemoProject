<?php
/**
 * @author Andrey Yatsenco <yatsenco@gmail.com>
 */


namespace Anyt\FileSearchBundle\Finder;

use Symfony\Component\Finder\Finder;

/**
 * Class FinderFactory
 * @package Anyt\FileSearchBundle\Finder
 */
class FinderFactory
{
    /**
     * @return Finder
     */
    public static function createFinder()
    {
        return new Finder();
    }
}