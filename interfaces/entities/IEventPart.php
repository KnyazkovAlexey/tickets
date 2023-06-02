<?php

namespace app\interfaces\entities;

/**
 * Conference lecture, ...
 */
interface IEventPart
{
    /**
     * @return IEvent
     */
    public function getEvent(): IEvent;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getStartedAt(): int;
}