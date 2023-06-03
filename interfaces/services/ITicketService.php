<?php

namespace app\interfaces\services;

use app\interfaces\entities\IEvent;
use app\interfaces\entities\IEventPart;
use app\interfaces\entities\ITicket;

/**
 * We handle tickets with this service
 */
interface ITicketService
{
    public function getLinkGenerator(): ILinkGenerator;
    public function getQrGenerator(): IQrGenerator;

    /**
     * 1). Create a ticket;
     * 2). Generate QRs or links.
     *
     * @param IEvent $event
     * @param IEventPart[]|null $eventParts
     * @return ITicket
     */
    public function createTicket(IEvent $event, array $eventParts = null): ITicket;
}








