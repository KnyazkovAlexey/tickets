<?php

namespace app\interfaces\entities;

/**
 * A ticket (or a ticket part) for an offline event
 */
interface IPassOffline extends ITicket
{
    /**
     * @return string
     */
    public function getQr(): string;
}