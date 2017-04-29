<?php

namespace Rosa;

use Rosa\Event;

/**
 * A calendar model.
 */
class Calendar
{
    /**
     * The events
     *
     * @var Event[]
     */
    protected $events;

    /**
     * @param Event[] The events.
     */
    public function __construct(array $events)
    {
        $this->events = $events;
    }

    public function getNextFourEvents()
    {
        return array_slice($this->events, 0, 4);
    }
}
