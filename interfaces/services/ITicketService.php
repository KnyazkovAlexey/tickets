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
     * Create an unpaid ticket without QRs or links
     *
     * @param IEvent $event
     * @param IEventPart[]|null $eventParts
     * @return ITicket
     */
    public function createTicket(IEvent $event, array $eventParts = null): ITicket;

    /**
     * Set required QRs or links
     *
     * @param ITicket $ticket
     * @return bool
     */
    public function onTicketPaid(ITicket $ticket): bool;
}








