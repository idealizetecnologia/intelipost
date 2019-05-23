<?php

namespace Intelipost\Proxy;

final class RastreamentoProxy extends ProxyBase implements IRastreamento {

    public function __construct() {
        $this->InitializeDefaultCurl();
    }
        
    public function CriarRastreamento() {
        throw new \Exception('Not implemented yet');
    }

    /**
     * @param \Intelipost\Proxy\Arguments\GerarTrackingCodeArgs $args
     * @return \Intelipost\Response\GerarTrackingCodeResponse
     */
    public function GerarTrackingCode(Arguments\GerarTrackingCodeArgs $args) {

        $this->_curl->SetIncludeHeader(false);
        $this->_curl->SetCustomRequest("GET");

        $this->_curl->CreateCurl($this->_baseURL . "/tracking_code/{$args->getDeliveryMethodId()}/{$args->getQuantity()}");

        $res = $this->_curl->GetResult();

        return new \Intelipost\Response\GerarTrackingCodeResponse($res);

    }

}
