<?php

namespace app\interfaces\entities;

/**
 * A ticket position for an offline partial event
 */
interface ITicketPartOffline extends ITicketPart
{
    /**
     * @return string An image path
     */
    public function getQr(): string;
}