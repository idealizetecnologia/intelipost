<?php

namespace Intelipost\Proxy;

/**
 * @author Leonardo Volpatto <leovolpatto@gmail.com>
 */
interface IRastreamento {
    
    public function CriarRastreamento();

    /**
     * @param \Intelipost\Proxy\Arguments\GerarTrackingCodeArgs $args
     * @return \Intelipost\Response\GerarTrackingCodeResponse[]
     */
    public function GerarTrackingCode(Arguments\GerarTrackingCodeArgs $args);
    
}
