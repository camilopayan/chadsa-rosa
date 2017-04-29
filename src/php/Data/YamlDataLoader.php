<?php

namespace Rosa\Data;

use Symfony\Component\Yaml\Yaml;
use Rosa\Data\IDataLoader;

/**
 * Class YamlDataLoader
 * @author yourname
 */
class YamlDataLoader implements IDataLoader
{
    /**
     * The filename for the yaml data store.
     *
     * @var string
     */
    private $filename;

    /**
     * Constructor
     *
     * @param string $filename
     */
    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    /**
     * @inheritDoc
     */
    public function loadEvents()
    {
        return Yaml::parse(file_get_contents($this->filename));
    }
}
