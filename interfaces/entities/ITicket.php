<?php

namespace app\interfaces\entities;

/**
 * A ticket for an event.
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
     * @return float|null
     */
    public function getPaidPrice(): ?float;
}