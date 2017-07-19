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
        return $this->getNextXEvents(4);
    }

    public function getNextTwoEvents()
    {
        return $this->getNextXEvents(2);
    }

    public function getNextXEvents($x)
    {
        return array_slice($this->events, 0, $x);
    }

}
