<?php

namespace app\interfaces\entities;

/**
 * A ticket position for an order that includes event parts
 */
interface ITicketPart
{
    /**
     * @return ITicket
     */
    public function getTicket(): ITicket;

    /**
     * @return IEventPart
     */
    public function getEventPart(): IEventPart;
}