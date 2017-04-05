<?php

namespace Rosa\Data;

/**
 * Classes implementing this interface can be used to retrieve event data from 
 * some arbitrary data storage.
 */
interface IDataStore
{
    /**
     * This will get the next four events from the data storage implementing 
     * this interface.
     *
     * @return Event[]
     */
    public function getNextFourEvents();
}
