<?php

namespace app\interfaces\services;

use app\interfaces\entities\IOrder;
use app\interfaces\entities\IUser;
use app\interfaces\forms\IOrderForm;

/**
 * We handle orders with this service.
 * It uses other services (getPricingCalculator, ...) for non-core tasks.
 */
interface IOrderService
{
    public function getPricingCalculator(): IPricingCalculator;
    public function getLinkGenerator(): ILinkGenerator;
    public function getQrGenerator(): IQrGenerator;

    /**
     * Calculate the preliminary order price before order creation:
     * 1). Get selected events and their selected parts;
     * 2). Get the price for every event (using getPricingCalculator).
     *
     * @param IOrderForm $orderForm
     * @return float
     */
    public function calcOrderPrice(IOrderForm $orderForm): float;

    /**
     * Create an unpaid order:
     * 1). Create an order;
     * 2). Create tickets (we may use some ITicketService, but i'm not sure);
     * 3). Generate QRs and links.
     *
     * @param IUser $user
     * @param IOrderForm $orderForm
     * @return bool
     */
    public function createOrder(IUser $user, IOrderForm $orderForm): bool;

    /**
     * Handle a successful order payment:
     * 1). Set paid_at for the order;
     * 2). Set paid_price for the tickets.
     *
     * @param IOrder $order
     * @return bool
     */
    public function onPaymentReceived(IOrder $order): bool;
}








