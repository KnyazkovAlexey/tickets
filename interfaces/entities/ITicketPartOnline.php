<?php

namespace app\interfaces\entities;

/**
 * A ticket position for an order that includes offline event parts
 */
interface ITicketPartOnline extends ITicketPart
{
    /**
     * @return string
     */
    public function getLink(): string;
}