<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use DateTimeImmutable;

interface DiscountCodeSetValidFromAndUntilAction extends DiscountCodeUpdateAction
{
    const FIELD_VALID_FROM = 'validFrom';
    const FIELD_VALID_UNTIL = 'validUntil';

    /**
     * <p>If absent, the field with the value is removed in case a value was set before.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>If absent, the field with the value is removed in case a value was set before.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}
