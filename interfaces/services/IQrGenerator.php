<?php

namespace app\interfaces\services;

use app\interfaces\entities\ITicket;
use app\interfaces\entities\ITicketPart;

/**
 * Generates QR-codes for offline tickets
 */
interface IQrGenerator
{
    /**
     * @param ITicket $ticket
     * @return string An image path
     */
    public function generateTicketQr(ITicket $ticket): string;

    /**
     * @param ITicketPart $ticketPart
     * @return string An image path
     */
    public function generateTicketPartQr(ITicketPart $ticketPart): string;
}