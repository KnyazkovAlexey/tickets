<?php

namespace app\interfaces\entities;

/**
 * A ticket for an event
 */
interface ITicket
{
    /**
     * @return IEvent
     */
    public function getEvent(): IEvent;

    /**
     * @return IOrder
     */
    public function getOrder(): IOrder;

    /**
     * @return float
     */
    public function getPrice(): float;

    /**
     * @return bool
     */
    public function isOnline(): bool;
}