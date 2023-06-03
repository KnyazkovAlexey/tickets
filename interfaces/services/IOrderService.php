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
     * 1). Create an unpaid order;
     * 2). Calculate prices (using getPricingCalculator);
     * 3). Create tickets (using getTicketService).
     *
     * @param IUser $user
     * @param IOrderForm $orderForm
     * @return IOrder
     */
    public function createOrder(IUser $user, IOrderForm $orderForm): IOrder;

    /**
     * Handle a successful order payment:
     * 1). Set paid_at;
     * 2). Set QRs or links for every ticket (using getTicketService).
     *
     * @param IOrder $order
     * @return bool
     */
    public function onPaymentReceived(IOrder $order): bool;
}








