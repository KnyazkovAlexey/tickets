<?php

namespace app\interfaces\services;

use app\interfaces\entities\IEvent;
use app\interfaces\entities\IEventPart;

/**
 * This calculator knows the price of every event and part.
 * Decided not to keep prices in the DB, because the ticket logic is still here.
 * We can use some pricing config or just constants.
 */
interface IPricingCalculator
{
    /**
     * Get a whole event price.
     *
     * @param IEvent $event
     * @return float
     */
    public function getEventPrice(IEvent $event): float;

    /**
     * Get a default price of an event part (lecture, ...).
     *
     * @param IEventPart $eventPart
     * @return float
     */
    public function getEventPartPrice(IEventPart $eventPart): float;

    /**
     * All magic is here (discounts for odd lectures, ...).
     *
     * @param IEventPart[] $selectedParts
     * @return float
     */
    public function calcPartialEventPrice(array $selectedParts): float;
}


