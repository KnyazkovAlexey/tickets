<?php

namespace app\interfaces\entities;

/**
 * A ticket position for an online partial event
 */
interface ITicketPartOnline extends ITicketPart
{
    /**
     * @return string
     */
    public function getLink(): string;
}