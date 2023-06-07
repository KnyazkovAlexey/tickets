<?php

namespace app\interfaces\services;

use app\interfaces\entities\ITicket;
use app\interfaces\entities\ITicketPart;

/**
 * This calculator knows the price of every ticket and part.
 * Decided not to keep prices in the DB, because the ticket logic is still here.
 * We can use some pricing config or just constants.
 */
interface IPricingCalculator
{
    /**
     * Get a whole ticket price.
     *
     * @param ITicket $ticket
     * @return float
     */
    public function getTicketPrice(ITicket $ticket): float;

    /**
     * Get a default price of an ticket part (lecture, ...).
     *
     * @param ITicketPart $ticketPart
     * @return float
     */
    public function getTicketPartPrice(ITicketPart $ticketPart): float;

    /**
     * All magic is here (discounts for odd lectures, ...).
     *
     * @param ITicket $ticket
     * @param ITicketPart[]|null $selectedParts
     * @return float
     */
    public function calcPartialEventPrice(ITicket $ticket, array $selectedParts = null): float;
}


