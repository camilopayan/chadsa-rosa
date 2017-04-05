<?php

namespace ;

/**
 * Class Event
 * @author yourname
 */
class Event
{
    /**
     * The URL for the event.
     *
     * @var string
     */
    protected $url;

    /**
     * The description of the event.
     *
     * @var string
     */
    protected $description;

    /**
     * The starting time for the event.
     *
     * @var DateTime
     */
    protected $startTime;

    /**
     * The ending time of the event.
     *
     * @var DateTime
     */
    protected $endTime;

    /**
     * The url for the image related to the event.
     *
     * @var string
     */
    protected $imageUrl;

    /**
     * @param string $url
     * @param string $description
     * @param DateTime $startTime
     * @param DateTime $endTime
     * @param string $imageUrl
     */
    public function __construct(
        string $url,
        string $description,
        DateTime $startTime,
        DateTime $endTime,
        string $imageUrl
    )
    {
        $this->url = $url;,
        $this->description = $description;,
        $this->startTime = $startTime;,
        $this->endTime = $endTime;,
        $this->canonicalLink = $canonicalLink;,
        $this->imageUrl = $imageUrl;
    }
}
