<?php

namespace app\interfaces\services;

use app\interfaces\entities\IEvent;
use app\interfaces\entities\IEventPart;
use app\interfaces\entities\ITicket;

/**
 * This calculator knows the price of every event and part.
 * Decided not to keep prices in the DB, because the ticket logic is still here.
 */
interface IPricesCalculator
{
    /**
     * @param IEvent $event
     * @return float
     */
    public function getEventPrice(IEvent $event): float;

    /**
     * @param IEventPart $event
     * @return float
     */
    public function getEventPartPrice(IEventPart $event): float;

    /**
     * @param ITicket $ticket
     * @return float
     */
    public function calcTicketPrice(ITicket $ticket): float;
}


