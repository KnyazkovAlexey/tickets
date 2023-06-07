<?php

namespace app\interfaces\entities;

/**
 * A ticket (or a ticket part) for an online event
 */
interface IPassOnline extends ITicket
{
    /**
     * @return string
     */
    public function getLink(): string;
}