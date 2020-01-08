<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Payment\PaymentMethodInfo;
use Commercetools\Api\Models\Payment\TransactionCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\JsonObject;

interface MyPayment extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_VERSION = 'version';
    const FIELD_CUSTOMER = 'customer';
    const FIELD_ANONYMOUS_ID = 'anonymousId';
    const FIELD_AMOUNT_PLANNED = 'amountPlanned';
    const FIELD_PAYMENT_METHOD_INFO = 'paymentMethodInfo';
    const FIELD_TRANSACTIONS = 'transactions';
    const FIELD_CUSTOM = 'custom';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>A reference to the customer this payment belongs to.</p>.
     *
     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * <p>Identifies payments belonging to an anonymous session (the customer has not signed up/in yet).</p>.
     *
     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <p>How much money this payment intends to receive from the customer.
     * The value usually matches the cart or order gross total.</p>.
     *
     * @return null|TypedMoney
     */
    public function getAmountPlanned();

    /**
     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo();

    /**
     * <p>A list of financial transactions of different TransactionTypes
     * with different TransactionStates.</p>.
     *
     * @return null|TransactionCollection
     */
    public function getTransactions();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCustomer(?CustomerReference $customer): void;

    public function setAnonymousId(?string $anonymousId): void;

    public function setAmountPlanned(?TypedMoney $amountPlanned): void;

    public function setPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo): void;

    public function setTransactions(?TransactionCollection $transactions): void;

    public function setCustom(?CustomFields $custom): void;
}
