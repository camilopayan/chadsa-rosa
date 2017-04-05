<?php

namespace Rosa\Data; 

use Symfony\Component\Yaml\Yaml;

/**
 * This class will take a file and act as a data store using the data in the file.
 */
class YamlDataStore implements IDataStore
{
    /**
     * The data in the given yaml file.
     *
     * @var mixed[]
     */
    protected $data;

    /**
     * Constructor.
     *
     * @param string $filename
     */
    public function __construct(string $filename)
    {
        $this->data = Yaml::parse(file_get_contents($filename));
    }

    /**
     * @inheritDoc
     */
    public function getNextFourEvents()
    {
    }
}
