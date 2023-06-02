<?php

namespace app\interfaces\entities;

/**
 * A ticket for an offline event
 */
interface ITicketOffline extends ITicket
{
    /**
     * @return string
     */
    public function getQr(): string;
}