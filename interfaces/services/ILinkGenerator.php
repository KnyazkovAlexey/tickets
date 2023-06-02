<?php

namespace app\interfaces\services;

use app\interfaces\entities\ITicketOnline;
use app\interfaces\entities\ITicketPartOnline;

/**
 * Generates links for online tickets
 */
interface ILinkGenerator
{
    /**
     * @param ITicketOnline $ticket
     * @return string An url
     */
    public function generateTicketLink(ITicketOnline $ticket): string;

    /**
     * @param ITicketPartOnline $ticketPart
     * @return string An url
     */
    public function generateTicketPartLink(ITicketPartOnline $ticketPart): string;
}