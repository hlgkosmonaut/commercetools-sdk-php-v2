<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<HighPrecisionMoneyDraft>
 */
final class HighPrecisionMoneyDraftBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $centAmount;

    /**
     * @var ?string
     */
    private $currencyCode;

    /**
     * @var ?int
     */
    private $fractionDigits;

    /**
     * @var ?int
     */
    private $preciseAmount;

    /**
     * <p>amount in the smallest indivisible unit of a currency, such as</p>
     * <ul>
     * <li>cents for EUR and USD, pence for GBP, or centime for CHF (5 CHF is specified as 500).</li>
     * <li>the value in the major unit for currencies without minor units, like JPY (5 JPY is specified as 5).</li>
     * </ul>
     *
     * @return null|int
     */
    public function getCentAmount()
    {
        return $this->centAmount;
    }

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *
     * @return null|string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * <p>Must be equal to the default number of fraction digits for the specified currency.</p>
     *
     * @return null|int
     */
    public function getFractionDigits()
    {
        return $this->fractionDigits;
    }

    /**
     * <p>amount in 1 / (10 ^ <code>fractionDigits</code>) of a currency.</p>
     *
     * @return null|int
     */
    public function getPreciseAmount()
    {
        return $this->preciseAmount;
    }

    /**
     * @param ?int $centAmount
     * @return $this
     */
    public function withCentAmount(?int $centAmount)
    {
        $this->centAmount = $centAmount;

        return $this;
    }

    /**
     * @param ?string $currencyCode
     * @return $this
     */
    public function withCurrencyCode(?string $currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @param ?int $fractionDigits
     * @return $this
     */
    public function withFractionDigits(?int $fractionDigits)
    {
        $this->fractionDigits = $fractionDigits;

        return $this;
    }

    /**
     * @param ?int $preciseAmount
     * @return $this
     */
    public function withPreciseAmount(?int $preciseAmount)
    {
        $this->preciseAmount = $preciseAmount;

        return $this;
    }


    public function build(): HighPrecisionMoneyDraft
    {
        return new HighPrecisionMoneyDraftModel(
            $this->centAmount,
            $this->currencyCode,
            $this->fractionDigits,
            $this->preciseAmount
        );
    }

    public static function of(): HighPrecisionMoneyDraftBuilder
    {
        return new self();
    }
}
