<?php

namespace Rosa;

use DateTime;

/**
 * An event model
 */
class Event
{
    /**
     * The URL for the event.
     *
     * @var string
     */
    public $url;

    /**
     * The name of the event.
     *
     * @var string
     */
    public $name;

    /**
     * The description of the event.
     *
     * @var string
     */
    public $description;

    /**
     * The starting time for the event.
     *
     * @var DateTime
     */
    public $startTime;

    /**
     * The url for the image related to the event.
     *
     * @var string
     */
    public $imageUrl;

    /**
     * The place for the event.
     *
     * @var string
     */
    public $place;

    /**
     * @param string $url
     * @param string $description
     * @param DateTime $startTime
     * @param string $imageUrl
     */
    public function __construct(
        string $name,
        DateTime $startTime,
        string $place,
        string $description,
        string $imageUrl,
        string $url = null
    )
    {
        $this->name = $name;
        $this->place = $place;
        $this->description = $description;
        $this->startTime = $startTime;
        $this->url = $url;
        $this->imageUrl = $imageUrl;
    }
}
