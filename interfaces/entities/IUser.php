<?php

namespace app\interfaces\entities;

/**
 * A customer
 */
interface IUser
{
    /**
     * @return string
     */
    public function getLogin(): string;

    /**
     * @return string
     */
    public function getPasswordHash(): string;
}