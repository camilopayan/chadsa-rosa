<?php

namespace Rosa\Data;

use Symfony\Component\Yaml\Yaml;
use Rosa\Data\IDataLoader;

/**
 * Fulfills the IDataLoader and loads events from a yaml file.
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
