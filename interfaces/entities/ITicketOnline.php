<?php

namespace app\interfaces\entities;

/**
 * A ticket for an online event
 */
interface ITicketOnline extends ITicket
{
    /**
     * @return string
     */
    public function getLink(): string;
}