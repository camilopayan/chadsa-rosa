<?php

namespace Rosa;

use Rosa\Data\IDatastore;

/**
 * Class Calendar
 * @author Camilo Payan
 */
class Calendar
{
    /**
     * The data store given.
     *
     * @var IDataStore
     */
    protected $dataStore;

    /**
     * @param mixed Google_Service_Calendar $calService
     */
    public function __construct(IDataStore $dataStore)
    {
        $this->dataStore = $dataStore;
    }

    public function getNextFourEvents()
    {
        return $dataStore->getNextFourEvents();
    }
}
