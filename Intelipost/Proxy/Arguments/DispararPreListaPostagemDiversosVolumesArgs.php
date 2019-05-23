<?php

namespace Intelipost\Proxy\Arguments;

final class DispararPreListaPostagemDiversosVolumesArgs {
    
    private $shipment_order_volume_ids = array();
    private $logisticProviderId;
    
    public function __construct() {
    }
    
    public function Add($order_number)
    {
        $this->shipment_order_volume_ids[] = $order_number;
    }
    
    public function GetOrders()
    {
        return $this->shipment_order_volume_ids;
    }

    /**
     * @return int
     */
    public function getLogisticProviderId() : int
    {
        return $this->logisticProviderId;
    }

    /**
     * @param $logisticProviderId
     * @return $this
     */
    public function setLogisticProviderId($logisticProviderId)
    {
        $this->logisticProviderId = $logisticProviderId;
        return $this;
    }

}
