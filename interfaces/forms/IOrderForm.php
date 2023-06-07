<?php

namespace app\interfaces\forms;

use app\interfaces\entities\ITicket;

/**
 * An order creation/editing form
 */
interface IOrderForm
{
    /**
     * @return ITicket[]
     */
    public function getTickets(): array;
}