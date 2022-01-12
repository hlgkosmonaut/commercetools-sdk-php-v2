<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressBuilder;
use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Api\Models\Order\ParcelDraftCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderAddDeliveryAction>
 */
final class StagedOrderAddDeliveryActionBuilder implements Builder
{
    /**
     * @var ?DeliveryItemCollection
     */
    private $items;

    /**
     * @var null|BaseAddress|BaseAddressBuilder
     */
    private $address;

    /**
     * @var ?ParcelDraftCollection
     */
    private $parcels;

    /**
     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return null|BaseAddress
     */
    public function getAddress()
    {
        return $this->address instanceof BaseAddressBuilder ? $this->address->build() : $this->address;
    }

    /**
     * @return null|ParcelDraftCollection
     */
    public function getParcels()
    {
        return $this->parcels;
    }

    /**
     * <p>Custom Fields for the Transaction.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?DeliveryItemCollection $items
     * @return $this
     */
    public function withItems(?DeliveryItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @param ?BaseAddress $address
     * @return $this
     */
    public function withAddress(?BaseAddress $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param ?ParcelDraftCollection $parcels
     * @return $this
     */
    public function withParcels(?ParcelDraftCollection $parcels)
    {
        $this->parcels = $parcels;

        return $this;
    }

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withAddress() instead
     * @return $this
     */
    public function withAddressBuilder(?BaseAddressBuilder $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): StagedOrderAddDeliveryAction
    {
        return new StagedOrderAddDeliveryActionModel(
            $this->items,
            $this->address instanceof BaseAddressBuilder ? $this->address->build() : $this->address,
            $this->parcels,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): StagedOrderAddDeliveryActionBuilder
    {
        return new self();
    }
}
