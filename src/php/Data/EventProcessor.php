<?php

namespace Rosa\Data;

use Rosa\Data\IDataLoader;
use Rosa\Event;

/**
 * Class EventProcessor
 * @author Camilo Payan
 */
class EventProcessor
{
    /**
     * This function takes a filename and returns the events inside, sorted by start time.
     * 
     * @param $filename string The yaml file holding the event data.
     *
     * @return Event[]
     */
    public static function processEvents(IDataLoader $loader)
    {
        $events = [];
        $raw = $loader->loadEvents();

        foreach ($raw as $event) {
            $events[] = new Event(
                $event['name'],
                new \DateTime('@' . $event['time']),
                $event['place'],
                $event['description'],
                '/dist/images/' . $event['image'],
                isset($event['url']) ? $event['url'] : null
            );
        }
        usort($events, function($a, $b) {
            return $a->startTime <=> $b->startTime;
        });
        return $events;
    }
}
