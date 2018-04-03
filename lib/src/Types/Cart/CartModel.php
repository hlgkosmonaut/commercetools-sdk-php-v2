<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ResourceModel;

use Commercetools\Builder\CartUpdateBuilder;
use Commercetools\Types\CustomerGroup\CustomerGroupReference;
use Commercetools\Types\Order\PaymentInfo;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\CartDiscount\CartDiscountReference;
use Commercetools\Types\Common\TypedMoney;
use Commercetools\Types\Common\Address;
use Commercetools\Types\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Types\Common\Resource;

class CartModel extends ResourceModel implements Cart {
    /**
     * @var string
     */
    protected $customerId;
    /**
     * @var string
     */
    protected $customerEmail;
    /**
     * @var string
     */
    protected $anonymousId;
    /**
     * @var LineItemCollection
     */
    protected $lineItems;
    /**
     * @var CustomLineItemCollection
     */
    protected $customLineItems;
    /**
     * @var TypedMoney
     */
    protected $totalPrice;
    /**
     * @var TaxedPrice
     */
    protected $taxedPrice;
    /**
     * @var string
     */
    protected $cartState;
    /**
     * @var Address
     */
    protected $shippingAddress;
    /**
     * @var Address
     */
    protected $billingAddress;
    /**
     * @var string
     */
    protected $inventoryMode;
    /**
     * @var string
     */
    protected $taxMode;
    /**
     * @var string
     */
    protected $taxRoundingMode;
    /**
     * @var string
     */
    protected $taxCalculationMode;
    /**
     * @var CustomerGroupReference
     */
    protected $customerGroup;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var ShippingInfo
     */
    protected $shippingInfo;
    /**
     * @var DiscountCodeInfoCollection
     */
    protected $discountCodes;
    /**
     * @var CustomFields
     */
    protected $custom;
    /**
     * @var PaymentInfo
     */
    protected $paymentInfo;
    /**
     * @var string
     */
    protected $locale;
    /**
     * @var int
     */
    protected $deleteDaysAfterLastModification;
    /**
     * @var CartDiscountReferenceCollection
     */
    protected $refusedGifts;
    /**
     * @var string
     */
    protected $origin;
    /**
     * @var ShippingRateInput
     */
    protected $shippingRateInput;

    /**
     * @return string
     */
    public function getCustomerId()
    {
        if (is_null($this->customerId)) {
            $value = $this->raw(Cart::FIELD_CUSTOMER_ID);
            $value = (string)$value;
            $this->customerId = $value;
        }
        return $this->customerId;
    }
    /**
     * @return string
     */
    public function getCustomerEmail()
    {
        if (is_null($this->customerEmail)) {
            $value = $this->raw(Cart::FIELD_CUSTOMER_EMAIL);
            $value = (string)$value;
            $this->customerEmail = $value;
        }
        return $this->customerEmail;
    }
    /**
     * @return string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            $value = $this->raw(Cart::FIELD_ANONYMOUS_ID);
            $value = (string)$value;
            $this->anonymousId = $value;
        }
        return $this->anonymousId;
    }
    /**
     * @return LineItemCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            $value = $this->raw(Cart::FIELD_LINE_ITEMS);
            if (is_null($value)) {
                return $this->mapData(LineItemCollection::class, null);
            }
            $value = $this->mapData(LineItemCollection::class, $value);
            $this->lineItems = $value;
        }
        return $this->lineItems;
    }
    /**
     * @return CustomLineItemCollection
     */
    public function getCustomLineItems()
    {
        if (is_null($this->customLineItems)) {
            $value = $this->raw(Cart::FIELD_CUSTOM_LINE_ITEMS);
            if (is_null($value)) {
                return $this->mapData(CustomLineItemCollection::class, null);
            }
            $value = $this->mapData(CustomLineItemCollection::class, $value);
            $this->customLineItems = $value;
        }
        return $this->customLineItems;
    }
    /**
     * @return TypedMoney
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            $value = $this->raw(Cart::FIELD_TOTAL_PRICE);
            $resolvedClass = $this->resolveDiscriminator(TypedMoney::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->totalPrice = $value;
        }
        return $this->totalPrice;
    }
    /**
     * @return TaxedPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            $value = $this->raw(Cart::FIELD_TAXED_PRICE);
            if (is_null($value)) {
                return $this->mapData(TaxedPrice::class, null);
            }
            $value = $this->mapData(TaxedPrice::class, $value);

            $this->taxedPrice = $value;
        }
        return $this->taxedPrice;
    }
    /**
     * @return string
     */
    public function getCartState()
    {
        if (is_null($this->cartState)) {
            $value = $this->raw(Cart::FIELD_CART_STATE);
            $value = (string)$value;
            $this->cartState = $value;
        }
        return $this->cartState;
    }
    /**
     * @return Address
     */
    public function getShippingAddress()
    {
        if (is_null($this->shippingAddress)) {
            $value = $this->raw(Cart::FIELD_SHIPPING_ADDRESS);
            if (is_null($value)) {
                return $this->mapData(Address::class, null);
            }
            $value = $this->mapData(Address::class, $value);

            $this->shippingAddress = $value;
        }
        return $this->shippingAddress;
    }
    /**
     * @return Address
     */
    public function getBillingAddress()
    {
        if (is_null($this->billingAddress)) {
            $value = $this->raw(Cart::FIELD_BILLING_ADDRESS);
            if (is_null($value)) {
                return $this->mapData(Address::class, null);
            }
            $value = $this->mapData(Address::class, $value);

            $this->billingAddress = $value;
        }
        return $this->billingAddress;
    }
    /**
     * @return string
     */
    public function getInventoryMode()
    {
        if (is_null($this->inventoryMode)) {
            $value = $this->raw(Cart::FIELD_INVENTORY_MODE);
            $value = (string)$value;
            $this->inventoryMode = $value;
        }
        return $this->inventoryMode;
    }
    /**
     * @return string
     */
    public function getTaxMode()
    {
        if (is_null($this->taxMode)) {
            $value = $this->raw(Cart::FIELD_TAX_MODE);
            $value = (string)$value;
            $this->taxMode = $value;
        }
        return $this->taxMode;
    }
    /**
     * @return string
     */
    public function getTaxRoundingMode()
    {
        if (is_null($this->taxRoundingMode)) {
            $value = $this->raw(Cart::FIELD_TAX_ROUNDING_MODE);
            $value = (string)$value;
            $this->taxRoundingMode = $value;
        }
        return $this->taxRoundingMode;
    }
    /**
     * @return string
     */
    public function getTaxCalculationMode()
    {
        if (is_null($this->taxCalculationMode)) {
            $value = $this->raw(Cart::FIELD_TAX_CALCULATION_MODE);
            $value = (string)$value;
            $this->taxCalculationMode = $value;
        }
        return $this->taxCalculationMode;
    }
    /**
     * @return CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            $value = $this->raw(Cart::FIELD_CUSTOMER_GROUP);
            if (is_null($value)) {
                return $this->mapData(CustomerGroupReference::class, null);
            }
            $value = $this->mapData(CustomerGroupReference::class, $value);

            $this->customerGroup = $value;
        }
        return $this->customerGroup;
    }
    /**
     * @return string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            $value = $this->raw(Cart::FIELD_COUNTRY);
            $value = (string)$value;
            $this->country = $value;
        }
        return $this->country;
    }
    /**
     * @return ShippingInfo
     */
    public function getShippingInfo()
    {
        if (is_null($this->shippingInfo)) {
            $value = $this->raw(Cart::FIELD_SHIPPING_INFO);
            if (is_null($value)) {
                return $this->mapData(ShippingInfo::class, null);
            }
            $value = $this->mapData(ShippingInfo::class, $value);

            $this->shippingInfo = $value;
        }
        return $this->shippingInfo;
    }
    /**
     * @return DiscountCodeInfoCollection
     */
    public function getDiscountCodes()
    {
        if (is_null($this->discountCodes)) {
            $value = $this->raw(Cart::FIELD_DISCOUNT_CODES);
            if (is_null($value)) {
                return $this->mapData(DiscountCodeInfoCollection::class, null);
            }
            $value = $this->mapData(DiscountCodeInfoCollection::class, $value);
            $this->discountCodes = $value;
        }
        return $this->discountCodes;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(Cart::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return PaymentInfo
     */
    public function getPaymentInfo()
    {
        if (is_null($this->paymentInfo)) {
            $value = $this->raw(Cart::FIELD_PAYMENT_INFO);
            if (is_null($value)) {
                return $this->mapData(PaymentInfo::class, null);
            }
            $value = $this->mapData(PaymentInfo::class, $value);

            $this->paymentInfo = $value;
        }
        return $this->paymentInfo;
    }
    /**
     * @return string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            $value = $this->raw(Cart::FIELD_LOCALE);
            $value = (string)$value;
            $this->locale = $value;
        }
        return $this->locale;
    }
    /**
     * @return int
     */
    public function getDeleteDaysAfterLastModification()
    {
        if (is_null($this->deleteDaysAfterLastModification)) {
            $value = $this->raw(Cart::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            $value = (int)$value;
            $this->deleteDaysAfterLastModification = $value;
        }
        return $this->deleteDaysAfterLastModification;
    }
    /**
     * @return CartDiscountReferenceCollection
     */
    public function getRefusedGifts()
    {
        if (is_null($this->refusedGifts)) {
            $value = $this->raw(Cart::FIELD_REFUSED_GIFTS);
            if (is_null($value)) {
                return $this->mapData(CartDiscountReferenceCollection::class, null);
            }
            $value = $this->mapData(CartDiscountReferenceCollection::class, $value);
            $this->refusedGifts = $value;
        }
        return $this->refusedGifts;
    }
    /**
     * @return string
     */
    public function getOrigin()
    {
        if (is_null($this->origin)) {
            $value = $this->raw(Cart::FIELD_ORIGIN);
            $value = (string)$value;
            $this->origin = $value;
        }
        return $this->origin;
    }
    /**
     * @return ShippingRateInput
     */
    public function getShippingRateInput()
    {
        if (is_null($this->shippingRateInput)) {
            $value = $this->raw(Cart::FIELD_SHIPPING_RATE_INPUT);
            $resolvedClass = $this->resolveDiscriminator(ShippingRateInput::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->shippingRateInput = $value;
        }
        return $this->shippingRateInput;
    }

    /**
     * @param string $customerId
     * @return $this
     */
    public function setCustomerId(string $customerId)
    {
        $this->customerId = (string)$customerId;

        return $this;
    }
    /**
     * @param string $customerEmail
     * @return $this
     */
    public function setCustomerEmail(string $customerEmail)
    {
        $this->customerEmail = (string)$customerEmail;

        return $this;
    }
    /**
     * @param string $anonymousId
     * @return $this
     */
    public function setAnonymousId(string $anonymousId)
    {
        $this->anonymousId = (string)$anonymousId;

        return $this;
    }
    /**
     * @param LineItemCollection $lineItems
     * @return $this
     */
    public function setLineItems(LineItemCollection $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }
    /**
     * @param CustomLineItemCollection $customLineItems
     * @return $this
     */
    public function setCustomLineItems(CustomLineItemCollection $customLineItems)
    {
        $this->customLineItems = $customLineItems;

        return $this;
    }
    /**
     * @param TypedMoney $totalPrice
     * @return $this
     */
    public function setTotalPrice(TypedMoney $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }
    /**
     * @param TaxedPrice $taxedPrice
     * @return $this
     */
    public function setTaxedPrice(TaxedPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }
    /**
     * @param string $cartState
     * @return $this
     */
    public function setCartState(string $cartState)
    {
        $this->cartState = (string)$cartState;

        return $this;
    }
    /**
     * @param Address $shippingAddress
     * @return $this
     */
    public function setShippingAddress(Address $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }
    /**
     * @param Address $billingAddress
     * @return $this
     */
    public function setBillingAddress(Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }
    /**
     * @param string $inventoryMode
     * @return $this
     */
    public function setInventoryMode(string $inventoryMode)
    {
        $this->inventoryMode = (string)$inventoryMode;

        return $this;
    }
    /**
     * @param string $taxMode
     * @return $this
     */
    public function setTaxMode(string $taxMode)
    {
        $this->taxMode = (string)$taxMode;

        return $this;
    }
    /**
     * @param string $taxRoundingMode
     * @return $this
     */
    public function setTaxRoundingMode(string $taxRoundingMode)
    {
        $this->taxRoundingMode = (string)$taxRoundingMode;

        return $this;
    }
    /**
     * @param string $taxCalculationMode
     * @return $this
     */
    public function setTaxCalculationMode(string $taxCalculationMode)
    {
        $this->taxCalculationMode = (string)$taxCalculationMode;

        return $this;
    }
    /**
     * @param CustomerGroupReference $customerGroup
     * @return $this
     */
    public function setCustomerGroup(CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }
    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country)
    {
        $this->country = (string)$country;

        return $this;
    }
    /**
     * @param ShippingInfo $shippingInfo
     * @return $this
     */
    public function setShippingInfo(ShippingInfo $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }
    /**
     * @param DiscountCodeInfoCollection $discountCodes
     * @return $this
     */
    public function setDiscountCodes(DiscountCodeInfoCollection $discountCodes)
    {
        $this->discountCodes = $discountCodes;

        return $this;
    }
    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }
    /**
     * @param PaymentInfo $paymentInfo
     * @return $this
     */
    public function setPaymentInfo(PaymentInfo $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }
    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale)
    {
        $this->locale = (string)$locale;

        return $this;
    }
    /**
     * @param int $deleteDaysAfterLastModification
     * @return $this
     */
    public function setDeleteDaysAfterLastModification(int $deleteDaysAfterLastModification)
    {
        $this->deleteDaysAfterLastModification = (int)$deleteDaysAfterLastModification;

        return $this;
    }
    /**
     * @param CartDiscountReferenceCollection $refusedGifts
     * @return $this
     */
    public function setRefusedGifts(CartDiscountReferenceCollection $refusedGifts)
    {
        $this->refusedGifts = $refusedGifts;

        return $this;
    }
    /**
     * @param string $origin
     * @return $this
     */
    public function setOrigin(string $origin)
    {
        $this->origin = (string)$origin;

        return $this;
    }
    /**
     * @param ShippingRateInput $shippingRateInput
     * @return $this
     */
    public function setShippingRateInput(ShippingRateInput $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }


    /**
     * @return CartUpdateBuilder
     */
    public function update()
    {
        $builder = new CartUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}
