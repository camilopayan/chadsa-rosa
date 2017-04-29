<?php

namespace Rosa\Data;

/**
 * Loads events from some data store.
 */
interface IDataLoader
{
    /**
     * This function will load events from whatever data store is holding the
     * events.
     * @return mixed[]
     */
    public function loadEvents();
}
