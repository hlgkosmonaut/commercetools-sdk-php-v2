<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<LastModifiedBy>
 */
final class LastModifiedByBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $clientId;

    /**
     * @var ?string
     */
    private $externalUserId;

    /**
     * @var CustomerReference|?CustomerReferenceBuilder
     */
    private $customer;

    /**
     * @var ?string
     */
    private $anonymousId;

    /**
     * @return null|string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @return null|string
     */
    public function getExternalUserId()
    {
        return $this->externalUserId;
    }

    /**
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
    }

    /**
     * @return $this
     */
    public function withClientId(?string $clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalUserId(?string $externalUserId)
    {
        $this->externalUserId = $externalUserId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomer(?CustomerReference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): LastModifiedBy
    {
        return new LastModifiedByModel(
            $this->clientId,
            $this->externalUserId,
            ($this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer),
            $this->anonymousId
        );
    }

    public static function of(): LastModifiedByBuilder
    {
        return new self();
    }
}
