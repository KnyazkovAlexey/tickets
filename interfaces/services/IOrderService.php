<?php

namespace app\interfaces\services;

use app\interfaces\entities\IOrder;
use app\interfaces\entities\IUser;
use app\interfaces\forms\IOrderForm;

/**
 * We handle orders with this service
 */
interface IOrderService
{
    public function getPricingCalculator(): IPricingCalculator;
    public function getTicketService(): ITicketService;

    /**
     * Create an unpaid order:
     * 1). Create an order;
     * 2). Calculate prices (using getPricingCalculator);
     * 2). Create tickets (using getTicketService).
     *
     * @param IUser $user
     * @param IOrderForm $orderForm
     * @return IOrder
     */
    public function createOrder(IUser $user, IOrderForm $orderForm): IOrder;

    /**
     * Handle a successful order payment (set paid_at)
     *
     * @param IOrder $order
     * @return bool
     */
    public function onPaymentReceived(IOrder $order): bool;
}








