<?php

namespace app\interfaces\entities;

/**
 * A ticket position for a partial event
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