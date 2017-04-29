<?php

namespace Rosa\Data;

/**
 * Interface IDataLoader
 * @author yourname
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
