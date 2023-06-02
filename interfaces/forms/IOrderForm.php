<?php

namespace app\interfaces\forms;

use app\interfaces\entities\IEvent;

/**
 * Order creation/editing form
 */
interface IOrderForm
{
    /**
     * @return array
     */
    public function getSelectedEvents(): array;

    /**
     * @param IEvent $selectedEvent
     * @return array
     */
    public function getSelectedEventParts(IEvent $selectedEvent): array;
}