<?php

namespace app\interfaces\entities;

/**
 * An user's order. Can include one or more tickets.
 */
interface IOrder
{
    /**
     * @return IUser
     */
    public function getUser(): IUser;

    /**
     * @return bool
     */
    public function isPaid(): bool;
}