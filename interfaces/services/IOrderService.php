<?php

namespace app\interfaces\services;

use app\interfaces\entities\IOrder;
use app\interfaces\entities\IUser;
use app\interfaces\forms\IOrderForm;

/**
 * We handle orders with this service.
 * It uses other services like a pricing calculator for non-core tasks.
 */
interface IOrderService
{
    public function getPricingCalculator(): IPricingCalculator;
    public function getLinkGenerator(): ILinkGenerator;
    public function getQrGenerator(): IQrGenerator;

    /**
     * Calculate the preliminary order price before order creation
     *
     * @param IOrderForm $orderForm
     * @return float
     */
    public function calcOrderPrice(IOrderForm $orderForm): float;

    /**
     * Create an unpaid order without tickets
     *
     * @param IUser $user
     * @param IOrderForm $orderForm
     * @return bool
     */
    public function createOrder(IUser $user, IOrderForm $orderForm): bool;

    /**
     * Handle a successful order payment.
     * Set paid_at, create tickets, generate QRs and links.
     *
     * (we may use some ITicketService here, but i'm not sure).
     *
     * @param IOrder $order
     * @return bool
     */
    public function onPaymentReceived(IOrder $order): bool;
}








