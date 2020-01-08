<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CustomLineItemCollection;
use Commercetools\Api\Models\Cart\DiscountCodeInfoCollection;
use Commercetools\Api\Models\Cart\LineItemCollection;
use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Type\CustomFields;
use DateTimeImmutable;

interface Order extends LoggedResource
{
    const FIELD_COMPLETED_AT = 'completedAt';
    const FIELD_ORDER_NUMBER = 'orderNumber';
    const FIELD_CUSTOMER_ID = 'customerId';
    const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    const FIELD_ANONYMOUS_ID = 'anonymousId';
    const FIELD_STORE = 'store';
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_CUSTOM_LINE_ITEMS = 'customLineItems';
    const FIELD_TOTAL_PRICE = 'totalPrice';
    const FIELD_TAXED_PRICE = 'taxedPrice';
    const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    const FIELD_BILLING_ADDRESS = 'billingAddress';
    const FIELD_TAX_MODE = 'taxMode';
    const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';
    const FIELD_CUSTOMER_GROUP = 'customerGroup';
    const FIELD_COUNTRY = 'country';
    const FIELD_ORDER_STATE = 'orderState';
    const FIELD_STATE = 'state';
    const FIELD_SHIPMENT_STATE = 'shipmentState';
    const FIELD_PAYMENT_STATE = 'paymentState';
    const FIELD_SHIPPING_INFO = 'shippingInfo';
    const FIELD_SYNC_INFO = 'syncInfo';
    const FIELD_RETURN_INFO = 'returnInfo';
    const FIELD_DISCOUNT_CODES = 'discountCodes';
    const FIELD_LAST_MESSAGE_SEQUENCE_NUMBER = 'lastMessageSequenceNumber';
    const FIELD_CART = 'cart';
    const FIELD_CUSTOM = 'custom';
    const FIELD_PAYMENT_INFO = 'paymentInfo';
    const FIELD_LOCALE = 'locale';
    const FIELD_INVENTORY_MODE = 'inventoryMode';
    const FIELD_ORIGIN = 'origin';
    const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';
    const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';
    const FIELD_REFUSED_GIFTS = 'refusedGifts';

    /**
     * <p>The unique ID of the order.</p>.
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>The current version of the order.</p>.
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>.
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>.
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>This field will only be present if it was set for Order Import</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getCompletedAt();

    /**
     * <p>String that uniquely identifies an order.
     * It can be used to create more human-readable (in contrast to ID) identifier for the order.
     * It should be unique across a project.
     * Once it's set it cannot be changed.</p>.
     *
     * @return null|string
     */
    public function getOrderNumber();

    /**
     * @return null|string
     */
    public function getCustomerId();

    /**
     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * <p>Identifies carts and orders belonging to an anonymous session (the customer has not signed up/in yet).</p>.
     *
     * @return null|string
     */
    public function getAnonymousId();

    /**
     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * @return null|LineItemCollection
     */
    public function getLineItems();

    /**
     * @return null|CustomLineItemCollection
     */
    public function getCustomLineItems();

    /**
     * @return null|TypedMoney
     */
    public function getTotalPrice();

    /**
     * <p>The taxes are calculated based on the shipping address.</p>.
     *
     * @return null|TaxedPrice
     */
    public function getTaxedPrice();

    /**
     * @return null|Address
     */
    public function getShippingAddress();

    /**
     * @return null|Address
     */
    public function getBillingAddress();

    /**
     * @return null|string
     */
    public function getTaxMode();

    /**
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for rouding.</p>.
     *
     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * <p>Set when the customer is set and the customer is a member of a customer group.
     * Used for product variant price selection.</p>.
     *
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.
     * Used for product variant price selection.</p>.
     *
     * @return null|string
     */
    public function getCountry();

    /**
     * <p>One of the four predefined OrderStates.</p>.
     *
     * @return null|string
     */
    public function getOrderState();

    /**
     * <p>This reference can point to a state in a custom workflow.</p>.
     *
     * @return null|StateReference
     */
    public function getState();

    /**
     * @return null|string
     */
    public function getShipmentState();

    /**
     * @return null|string
     */
    public function getPaymentState();

    /**
     * <p>Set if the ShippingMethod is set.</p>.
     *
     * @return null|ShippingInfo
     */
    public function getShippingInfo();

    /**
     * @return null|SyncInfoCollection
     */
    public function getSyncInfo();

    /**
     * @return null|ReturnInfoCollection
     */
    public function getReturnInfo();

    /**
     * @return null|DiscountCodeInfoCollection
     */
    public function getDiscountCodes();

    /**
     * <p>The sequence number of the last order message produced by changes to this order.
     * <code>0</code> means, that no messages were created yet.</p>.
     *
     * @return null|int
     */
    public function getLastMessageSequenceNumber();

    /**
     * <p>Set when this order was created from a cart.
     * The cart will have the state <code>Ordered</code>.</p>.
     *
     * @return null|CartReference
     */
    public function getCart();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|PaymentInfo
     */
    public function getPaymentInfo();

    /**
     * @return null|string
     */
    public function getLocale();

    /**
     * @return null|string
     */
    public function getInventoryMode();

    /**
     * @return null|string
     */
    public function getOrigin();

    /**
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for calculating the price with LineItemLevel (horizontally) or UnitPriceLevel (vertically) calculation mode.</p>.
     *
     * @return null|string
     */
    public function getTaxCalculationMode();

    /**
     * <p>The shippingRateInput is used as an input to select a ShippingRatePriceTier.</p>.
     *
     * @return null|ShippingRateInput
     */
    public function getShippingRateInput();

    /**
     * <p>Contains addresses for orders with multiple shipping addresses.</p>.
     *
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses();

    /**
     * <p>Automatically filled when a line item with LineItemMode <code>GiftLineItem</code> is removed from this order.</p>.
     *
     * @return null|CartDiscountReferenceCollection
     */
    public function getRefusedGifts();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setCompletedAt(?DateTimeImmutable $completedAt): void;

    public function setOrderNumber(?string $orderNumber): void;

    public function setCustomerId(?string $customerId): void;

    public function setCustomerEmail(?string $customerEmail): void;

    public function setAnonymousId(?string $anonymousId): void;

    public function setStore(?StoreKeyReference $store): void;

    public function setLineItems(?LineItemCollection $lineItems): void;

    public function setCustomLineItems(?CustomLineItemCollection $customLineItems): void;

    public function setTotalPrice(?TypedMoney $totalPrice): void;

    public function setTaxedPrice(?TaxedPrice $taxedPrice): void;

    public function setShippingAddress(?Address $shippingAddress): void;

    public function setBillingAddress(?Address $billingAddress): void;

    public function setTaxMode(?string $taxMode): void;

    public function setTaxRoundingMode(?string $taxRoundingMode): void;

    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    public function setCountry(?string $country): void;

    public function setOrderState(?string $orderState): void;

    public function setState(?StateReference $state): void;

    public function setShipmentState(?string $shipmentState): void;

    public function setPaymentState(?string $paymentState): void;

    public function setShippingInfo(?ShippingInfo $shippingInfo): void;

    public function setSyncInfo(?SyncInfoCollection $syncInfo): void;

    public function setReturnInfo(?ReturnInfoCollection $returnInfo): void;

    public function setDiscountCodes(?DiscountCodeInfoCollection $discountCodes): void;

    public function setLastMessageSequenceNumber(?int $lastMessageSequenceNumber): void;

    public function setCart(?CartReference $cart): void;

    public function setCustom(?CustomFields $custom): void;

    public function setPaymentInfo(?PaymentInfo $paymentInfo): void;

    public function setLocale(?string $locale): void;

    public function setInventoryMode(?string $inventoryMode): void;

    public function setOrigin(?string $origin): void;

    public function setTaxCalculationMode(?string $taxCalculationMode): void;

    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void;

    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void;

    public function setRefusedGifts(?CartDiscountReferenceCollection $refusedGifts): void;
}
