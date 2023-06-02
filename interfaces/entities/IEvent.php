<?php

namespace app\interfaces\entities;

/**
 * Conference, concert, gallery, ...
 */
interface IEvent
{
    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getStartedAt(): int;
}