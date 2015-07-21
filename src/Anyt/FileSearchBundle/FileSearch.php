<?php
/**
 * @author Andrey Yatsenco <yatsenco@gmail.com>
 */


namespace Anyt\FileSearchBundle;


use Anyt\FileSearchBundle\Engine\EngineInterface;

class FileSearch
{
    /**
     * @var string
     */
    private $defaultDir = null;

    /**
     * @var EngineInterface
     */
    private $engine;

    public function __construct(EngineInterface $engine, $dir)
    {
        $this->engine = $engine;
        $this->defaultDir = $dir;
    }

    public function find($keyword, $dir = null)
    {
        $dir = null === $dir ? $this->defaultDir : $dir;

        return $this->engine->find($keyword, $dir);
    }

}