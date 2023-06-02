<?php

namespace app\interfaces\services;

use app\interfaces\entities\IOrder;
use app\interfaces\entities\IUser;
use app\interfaces\forms\IOrderForm;

/**
 * Order handling
 */
interface IOrderService
{
    /**
     * @param IUser $user
     * @param IOrderForm $orderForm
     * @return bool
     */
    public function createOrder(IUser $user, IOrderForm $orderForm): bool;

    /**
     * Create tickets, generate QRs, ...
     *
     * @param IOrder $order
     * @return bool
     */
    public function onPaymentReceived(IOrder $order): bool;
}








