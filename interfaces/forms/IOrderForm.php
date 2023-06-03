<?php

namespace app\interfaces\forms;

use app\interfaces\entities\IEvent;
use app\interfaces\entities\IEventPart;

/**
 * Order creation/editing form
 */
interface IOrderForm
{
    /**
     * @return IEvent[]
     */
    public function getSelectedEvents(): array;

    /**
     * @param IEvent $selectedEvent
     * @return IEventPart[]
     */
    public function getSelectedEventParts(IEvent $selectedEvent): array;
}