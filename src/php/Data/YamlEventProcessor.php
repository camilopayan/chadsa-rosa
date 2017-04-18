<?php

namespace Rosa\Data;

use Symfony\Component\Yaml\Yaml;

/**
 * Class YamlEventProcessor
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
                $event['time'],
                $event['place'],
                $event['description'],
                isset($event['url']) ? $event['url'] : null
            )
        }
        usort($events, function($a, $b) {
            return $a->startTime <=> $b->startTime;
        });
        return $events;
    }
}
