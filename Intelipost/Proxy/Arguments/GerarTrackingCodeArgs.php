<?php

namespace Intelipost\Proxy\Arguments;

final class GerarTrackingCodeArgs {

    /**
     * @var int
     */
    private $delivery_method_id;

    /**
     * @var int
     */
    private $quantity;

    public function __construct(int $delivery_method_id, int $quantity=1) {
        $this->setDeliveryMethodId($delivery_method_id);
        $this->setQuantity($quantity);
    }

    /**
     * @return int
     */
    public function getDeliveryMethodId(): int
    {
        return $this->delivery_method_id;
    }

    /**
     * @param int $delivery_method_id
     * @return GerarTrackingCodeArgs
     */
    public function setDeliveryMethodId(int $delivery_method_id): GerarTrackingCodeArgs
    {
        $this->delivery_method_id = $delivery_method_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return GerarTrackingCodeArgs
     */
    public function setQuantity(int $quantity): GerarTrackingCodeArgs
    {
        $this->quantity = $quantity;
        return $this;
    }

}
