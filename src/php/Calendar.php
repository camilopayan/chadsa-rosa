<?php

namespace Rosa;

use Google_Service_Calendar;

/**
 * Class Calendar
 * @author Camilo Payan
 */
class Calendar
{
    /**
     * The Google calendar service
     *
     * @var Google_Service_Calendar
     */
    protected $calService;

    /**
     * The calendar ID for the DSA calendar
     *
     * @var string
     */
    protected $calendarId;

    /**
     * @param mixed Google_Service_Calendar $calService
     */
    public function __construct(Google_Service_Calendar $calService, string $calendarId)
    {
        $this->calService = $calService;
        $this->calendarId = $calendarId;
    }

    public function getNextFourEvents()
    {
        return $this->calService->events->listEvents($this->calendarId, [
            'maxResults' => 4
            ]);
    }
}
