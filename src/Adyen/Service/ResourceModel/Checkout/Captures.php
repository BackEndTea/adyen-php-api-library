<?php

namespace Adyen\Service\ResourceModel\Checkout;

class Captures extends \Adyen\Service\AbstractCheckoutResource
{
    /**
     * @var string
     */
    protected $endpoint;

    /**
     * Include applicationInfo key in the request parameters
     *
     * @var bool
     */
    protected $allowApplicationInfo = false;

    /**
     * Payments constructor.
     *
     * @param \Adyen\Service $service
     * @throws \Adyen\AdyenException
     */
    public function __construct($service)
    {
        $this->endpoint = $this->getCheckoutEndpoint($service) .
            '/' . $service->getConfiguration()->getApiCheckoutVersion() . '/payments/{paymentPspReference}/captures';
        parent::__construct($service, $this->endpoint, $this->allowApplicationInfo);
    }
}
