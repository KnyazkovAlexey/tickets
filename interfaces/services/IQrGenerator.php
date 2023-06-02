<?php

namespace app\interfaces\services;

use app\interfaces\entities\ITicketOffline;
use app\interfaces\entities\ITicketPartOffline;

/**
 * Generates QR-codes for offline tickets
 */
interface IQrGenerator
{
    /**
     * @param ITicketOffline $ticket
     * @return string An image path
     */
    public function generateTicketQr(ITicketOffline $ticket): string;

    /**
     * @param ITicketPartOffline $ticketPart
     * @return string An image path
     */
    public function generateTicketPartQr(ITicketPartOffline $ticketPart): string;
}