<?php

namespace app\interfaces\services;

use app\interfaces\entities\ITicket;
use app\interfaces\entities\ITicketPart;

/**
 * Generates links for online tickets
 */
interface ILinkGenerator
{
    /**
     * @param ITicket $ticket
     * @return string An url
     */
    public function generateTicketLink(ITicket $ticket): string;

    /**
     * @param ITicketPart $ticketPart
     * @return string An url
     */
    public function generateTicketPartLink(ITicketPart $ticketPart): string;
}